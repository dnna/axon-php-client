<?php /** @noinspection PhpComposerExtensionStubsInspection */

require('/app-vendor/autoload.php');

use Grpc\ChannelCredentials;
use Io\Axoniq\Axonserver\Grpc\Command\CommandProviderInbound;
use Io\Axoniq\Axonserver\Grpc\Command\CommandProviderOutbound;
use Io\Axoniq\Axonserver\Grpc\Command\CommandResponse;
use Io\Axoniq\Axonserver\Grpc\Command\CommandServiceClient;
use Io\Axoniq\Axonserver\Grpc\Command\CommandSubscription;
use Io\Axoniq\Axonserver\Grpc\FlowControl;
use Io\Axoniq\Axonserver\Grpc\SerializedObject;

$commandServiceClient = new CommandServiceClient(
    'axonserver:8124', [
        'credentials' => ChannelCredentials::createInsecure(),
    ]
);

$commandSubscription = new CommandSubscription();
$commandSubscription->setClientId('ReceivingServer');
$commandSubscription->setComponentName('ReceivingServer');
$commandSubscription->setCommand('Greeting');

$flowControl = new FlowControl();
$flowControl->setClientId('ReceivingServer');
$flowControl->setPermits(2048);

$stream = $commandServiceClient->OpenStream();

$commandProviderOutbound = new CommandProviderOutbound();
$commandProviderOutbound->setFlowControl($flowControl);
$stream->write($commandProviderOutbound);

$commandProviderOutbound = new CommandProviderOutbound();
$commandProviderOutbound->setSubscribe($commandSubscription);
$stream->write($commandProviderOutbound);

while ($inboundCommand = $stream->read()) {
    /**
     * @var CommandProviderInbound $inboundCommand
     */
    /**
     * @var SerializedObject $payload
     */
    $payload = $inboundCommand->getCommand()->getPayload();
    echo $payload->getData();

    $response = new CommandResponse();
    $responseSrl = new SerializedObject();
    $responseSrl->setData('THIS IS A RESPONSE');
    $response->setPayload($responseSrl);

    $commandProviderOutbound = new CommandProviderOutbound();
    $commandProviderOutbound->setCommandResponse($response);
    $stream->write($commandProviderOutbound);
}

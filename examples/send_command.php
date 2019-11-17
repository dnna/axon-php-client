<?php /** @noinspection PhpComposerExtensionStubsInspection */

require('/app-vendor/autoload.php');

use Grpc\ChannelCredentials;
use Io\Axoniq\Axonserver\Grpc\Command\Command;
use Io\Axoniq\Axonserver\Grpc\Command\CommandResponse;
use Io\Axoniq\Axonserver\Grpc\Command\CommandServiceClient;
use Io\Axoniq\Axonserver\Grpc\SerializedObject;

$commandServiceClient = new CommandServiceClient(
    'axonserver:8124', [
        'credentials' => ChannelCredentials::createInsecure(),
    ]
);

$command = new Command();
$command->setClientId('Greeting');
$command->setComponentName('Greeting');
$command->setName('Greeting');

$srl = new SerializedObject();
$srl->setData('THIS IS A PAYLOAD');
$command->setPayload($srl);

/**
 * @var CommandResponse $reply
 */
[$reply, $status] = $commandServiceClient->Dispatch($command)->wait();

if (!$reply) {
    echo 'ERROR: Reply is null';
    exit;
}
if ($reply->getErrorMessage() !== null) {
    echo 'ERROR: ' . $reply->getErrorMessage()->getMessage();
    exit;
}
echo $reply->getPayload()->getData();

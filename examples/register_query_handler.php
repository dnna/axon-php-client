<?php /** @noinspection PhpComposerExtensionStubsInspection */

require('/app-vendor/autoload.php');

use Grpc\ChannelCredentials;
use Io\Axoniq\Axonserver\Grpc\FlowControl;
use Io\Axoniq\Axonserver\Grpc\Query\QueryComplete;
use Io\Axoniq\Axonserver\Grpc\Query\QueryProviderInbound;
use Io\Axoniq\Axonserver\Grpc\Query\QueryProviderOutbound;
use Io\Axoniq\Axonserver\Grpc\Query\QueryResponse;
use Io\Axoniq\Axonserver\Grpc\Query\QueryServiceClient;
use Io\Axoniq\Axonserver\Grpc\Query\QuerySubscription;
use Io\Axoniq\Axonserver\Grpc\SerializedObject;

$queryServiceClient = new QueryServiceClient(
    'axonserver:8124', [
        'credentials' => ChannelCredentials::createInsecure(),
    ]
);

$querySubscription = new QuerySubscription();
$querySubscription->setClientId('ReceivingQueryServer');
$querySubscription->setComponentName('ReceivingQueryServer');
$querySubscription->setQuery('GreetingQuery');

$flowControl = new FlowControl();
$flowControl->setClientId('ReceivingQueryServer');
$flowControl->setPermits(2048);

$stream = $queryServiceClient->OpenStream();

$queryProviderOutbound = new QueryProviderOutbound();
$queryProviderOutbound->setFlowControl($flowControl);
$stream->write($queryProviderOutbound);

$queryProviderOutbound = new QueryProviderOutbound();
$queryProviderOutbound->setSubscribe($querySubscription);
$stream->write($queryProviderOutbound);

while ($inboundQuery = $stream->read()) {
    /**
     * @var QueryProviderInbound $inboundQuery
     */
    /**
     * @var SerializedObject $payload
     */
    $payload = $inboundQuery->getQuery()->getPayload();
    echo $payload->getData();

    $response = new QueryResponse();
    $responseSrl = new SerializedObject();
    $responseSrl->setData('THIS IS A QUERY RESPONSE');
    $response->setPayload($responseSrl);

    $queryProviderOutbound = new QueryProviderOutbound();
    $queryProviderOutbound->setQueryResponse($response);
    $stream->write($queryProviderOutbound);

    $complete = new QueryComplete();
    $queryProviderOutbound = new QueryProviderOutbound();
    $queryProviderOutbound->setQueryComplete($complete);
    $stream->write($queryProviderOutbound);
}

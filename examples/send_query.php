<?php /** @noinspection PhpComposerExtensionStubsInspection */

require('vendor/autoload.php');

use Grpc\ChannelCredentials;
use Io\Axoniq\Axonserver\Grpc\Query\QueryRequest;
use Io\Axoniq\Axonserver\Grpc\Query\QueryResponse;
use Io\Axoniq\Axonserver\Grpc\Query\QueryServiceClient;
use Io\Axoniq\Axonserver\Grpc\SerializedObject;

$queryServiceClient = new QueryServiceClient(
    'axonserver:8124', [
        'credentials' => ChannelCredentials::createInsecure(),
    ]
);

$query = new QueryRequest();
$query->setClientId('Greeting');
$query->setComponentName('Greeting');
$query->setQuery('GreetingQuery');

$srl = new SerializedObject();
$srl->setData('THIS IS A PAYLOAD');
$query->setPayload($srl);

foreach($queryServiceClient->Query($query)->responses() as $reply) {
    /**
     * @var QueryResponse $resp
     */
    if (!$reply) {
        echo 'ERROR: Reply is null';
        exit;
    }
    if ($reply->getErrorMessage() !== null) {
        echo 'ERROR: ' . $reply->getErrorMessage()->getMessage();
        exit;
    }
    echo $reply->getPayload()->getData();
}

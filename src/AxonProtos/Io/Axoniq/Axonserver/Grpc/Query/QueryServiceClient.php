<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Io\Axoniq\Axonserver\Grpc\Query;

/**
 * Service providing operations for the Query Messaging component of AxonServer 
 */
class QueryServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Opens a Query- and Instruction stream to AxonServer. 
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function OpenStream($metadata = [], $options = []) {
        return $this->_bidiRequest('/io.axoniq.axonserver.grpc.query.QueryService/OpenStream',
        ['\Io\Axoniq\Axonserver\Grpc\Query\QueryProviderInbound','decode'],
        $metadata, $options);
    }

    /**
     * Sends a point-to-point or scatter-gather Query 
     * @param \Io\Axoniq\Axonserver\Grpc\Query\QueryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Query(\Io\Axoniq\Axonserver\Grpc\Query\QueryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.axoniq.axonserver.grpc.query.QueryService/Query',
        $argument,
        ['\Io\Axoniq\Axonserver\Grpc\Query\QueryResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Opens a Subscription Query 
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Subscription($metadata = [], $options = []) {
        return $this->_bidiRequest('/io.axoniq.axonserver.grpc.query.QueryService/Subscription',
        ['\Io\Axoniq\Axonserver\Grpc\Query\SubscriptionQueryResponse','decode'],
        $metadata, $options);
    }

}

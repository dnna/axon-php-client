<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Io\Axoniq\Axonserver\Grpc\Command;

/**
 * The CommandService defines the gRPC requests necessary for subscribing command handlers, and dispatching commands. 
 */
class CommandServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Opens a stream allowing clients to register command handlers and receive commands. 
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function OpenStream($metadata = [], $options = []) {
        return $this->_bidiRequest('/io.axoniq.axonserver.grpc.command.CommandService/OpenStream',
        ['\Io\Axoniq\Axonserver\Grpc\Command\CommandProviderInbound','decode'],
        $metadata, $options);
    }

    /**
     * Dispatches the given command, returning the result of command execution 
     * @param \Io\Axoniq\Axonserver\Grpc\Command\Command $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Dispatch(\Io\Axoniq\Axonserver\Grpc\Command\Command $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.axoniq.axonserver.grpc.command.CommandService/Dispatch',
        $argument,
        ['\Io\Axoniq\Axonserver\Grpc\Command\CommandResponse', 'decode'],
        $metadata, $options);
    }

}

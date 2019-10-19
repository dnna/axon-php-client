<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Io\Axoniq\Axonserver\Grpc\Control;

/**
 * Service describing operations for connecting to the AxonServer platform.
 *
 * Clients are expected to use this service on any of the Platform's Admin nodes to obtain connection information of the
 * node that it should set up the actual connection with. On that second node, the clients should open an instruction
 * stream (see OpenStream), so that AxonServer and the client application can exchange information and instructions.
 */
class PlatformServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Obtains connection information for the Server that a Client should use for its connections. 
     * @param \Io\Axoniq\Axonserver\Grpc\Control\ClientIdentification $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetPlatformServer(\Io\Axoniq\Axonserver\Grpc\Control\ClientIdentification $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.axoniq.axonserver.grpc.control.PlatformService/GetPlatformServer',
        $argument,
        ['\Io\Axoniq\Axonserver\Grpc\Control\PlatformInfo', 'decode'],
        $metadata, $options);
    }

    /**
     * Opens an instruction stream to the Platform, allowing AxonServer to provide management instructions to the application 
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function OpenStream($metadata = [], $options = []) {
        return $this->_bidiRequest('/io.axoniq.axonserver.grpc.control.PlatformService/OpenStream',
        ['\Io\Axoniq\Axonserver\Grpc\Control\PlatformOutboundInstruction','decode'],
        $metadata, $options);
    }

}

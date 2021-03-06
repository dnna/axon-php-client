<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: command.proto

namespace Io\Axoniq\Axonserver\Grpc\Command;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An instruction or confirmation from AxonServer towards the component that provides the Command Handler 
 *
 * Generated from protobuf message <code>io.axoniq.axonserver.grpc.command.CommandProviderInbound</code>
 */
class CommandProviderInbound extends \Google\Protobuf\Internal\Message
{
    protected $request;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Io\Axoniq\Axonserver\Grpc\Confirmation $confirmation
     *           An acknowledgement of an instruction sent via the Outbound channel 
     *     @type \Io\Axoniq\Axonserver\Grpc\Command\Command $command
     *           A command for this component to process 
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Command::initOnce();
        parent::__construct($data);
    }

    /**
     * An acknowledgement of an instruction sent via the Outbound channel 
     *
     * Generated from protobuf field <code>.io.axoniq.axonserver.grpc.Confirmation confirmation = 1;</code>
     * @return \Io\Axoniq\Axonserver\Grpc\Confirmation
     */
    public function getConfirmation()
    {
        return $this->readOneof(1);
    }

    /**
     * An acknowledgement of an instruction sent via the Outbound channel 
     *
     * Generated from protobuf field <code>.io.axoniq.axonserver.grpc.Confirmation confirmation = 1;</code>
     * @param \Io\Axoniq\Axonserver\Grpc\Confirmation $var
     * @return $this
     */
    public function setConfirmation($var)
    {
        GPBUtil::checkMessage($var, \Io\Axoniq\Axonserver\Grpc\Confirmation::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * A command for this component to process 
     *
     * Generated from protobuf field <code>.io.axoniq.axonserver.grpc.command.Command command = 2;</code>
     * @return \Io\Axoniq\Axonserver\Grpc\Command\Command
     */
    public function getCommand()
    {
        return $this->readOneof(2);
    }

    /**
     * A command for this component to process 
     *
     * Generated from protobuf field <code>.io.axoniq.axonserver.grpc.command.Command command = 2;</code>
     * @param \Io\Axoniq\Axonserver\Grpc\Command\Command $var
     * @return $this
     */
    public function setCommand($var)
    {
        GPBUtil::checkMessage($var, \Io\Axoniq\Axonserver\Grpc\Command\Command::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getRequest()
    {
        return $this->whichOneof("request");
    }

}


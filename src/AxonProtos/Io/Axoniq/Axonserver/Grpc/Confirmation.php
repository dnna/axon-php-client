<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common.proto

namespace Io\Axoniq\Axonserver\Grpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message describing a confirmation of a request or instruction 
 *
 * Generated from protobuf message <code>io.axoniq.axonserver.grpc.Confirmation</code>
 */
class Confirmation extends \Google\Protobuf\Internal\Message
{
    /**
     * The identifier of the message to confirm 
     *
     * Generated from protobuf field <code>string message_id = 1;</code>
     */
    private $message_id = '';
    /**
     * Indicator whether the instruction was handled successfully 
     *
     * Generated from protobuf field <code>bool success = 2;</code>
     */
    private $success = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $message_id
     *           The identifier of the message to confirm 
     *     @type bool $success
     *           Indicator whether the instruction was handled successfully 
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * The identifier of the message to confirm 
     *
     * Generated from protobuf field <code>string message_id = 1;</code>
     * @return string
     */
    public function getMessageId()
    {
        return $this->message_id;
    }

    /**
     * The identifier of the message to confirm 
     *
     * Generated from protobuf field <code>string message_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMessageId($var)
    {
        GPBUtil::checkString($var, True);
        $this->message_id = $var;

        return $this;
    }

    /**
     * Indicator whether the instruction was handled successfully 
     *
     * Generated from protobuf field <code>bool success = 2;</code>
     * @return bool
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * Indicator whether the instruction was handled successfully 
     *
     * Generated from protobuf field <code>bool success = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setSuccess($var)
    {
        GPBUtil::checkBool($var);
        $this->success = $var;

        return $this;
    }

}

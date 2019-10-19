<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: event.proto

namespace Io\Axoniq\Axonserver\Grpc\Event;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message containing the information necessary to track the position of events in the Event Stream 
 *
 * Generated from protobuf message <code>io.axoniq.axonserver.grpc.event.TrackingToken</code>
 */
class TrackingToken extends \Google\Protobuf\Internal\Message
{
    /**
     * The value of the Token 
     *
     * Generated from protobuf field <code>int64 token = 1;</code>
     */
    private $token = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $token
     *           The value of the Token 
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Event::initOnce();
        parent::__construct($data);
    }

    /**
     * The value of the Token 
     *
     * Generated from protobuf field <code>int64 token = 1;</code>
     * @return int|string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * The value of the Token 
     *
     * Generated from protobuf field <code>int64 token = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setToken($var)
    {
        GPBUtil::checkInt64($var);
        $this->token = $var;

        return $this;
    }

}

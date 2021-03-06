<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common.proto

namespace Io\Axoniq\Axonserver\Grpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message used for Flow Control instruction, providing the counterpart with additional permits for sending messages 
 *
 * Generated from protobuf message <code>io.axoniq.axonserver.grpc.FlowControl</code>
 */
class FlowControl extends \Google\Protobuf\Internal\Message
{
    /**
     * The ClientID of the component providing additional permits 
     *
     * Generated from protobuf field <code>string client_id = 2;</code>
     */
    private $client_id = '';
    /**
     * The number of permits to provide 
     *
     * Generated from protobuf field <code>int64 permits = 3;</code>
     */
    private $permits = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $client_id
     *           The ClientID of the component providing additional permits 
     *     @type int|string $permits
     *           The number of permits to provide 
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * The ClientID of the component providing additional permits 
     *
     * Generated from protobuf field <code>string client_id = 2;</code>
     * @return string
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * The ClientID of the component providing additional permits 
     *
     * Generated from protobuf field <code>string client_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setClientId($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_id = $var;

        return $this;
    }

    /**
     * The number of permits to provide 
     *
     * Generated from protobuf field <code>int64 permits = 3;</code>
     * @return int|string
     */
    public function getPermits()
    {
        return $this->permits;
    }

    /**
     * The number of permits to provide 
     *
     * Generated from protobuf field <code>int64 permits = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPermits($var)
    {
        GPBUtil::checkInt64($var);
        $this->permits = $var;

        return $this;
    }

}


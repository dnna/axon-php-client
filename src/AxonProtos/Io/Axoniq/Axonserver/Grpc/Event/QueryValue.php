<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: event.proto

namespace Io\Axoniq\Axonserver\Grpc\Event;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Value used in Query Responses to represent a value in its original type 
 *
 * Generated from protobuf message <code>io.axoniq.axonserver.grpc.event.QueryValue</code>
 */
class QueryValue extends \Google\Protobuf\Internal\Message
{
    protected $data;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $text_value
     *           The text value 
     *     @type int|string $number_value
     *           The (64 bits) integer value 
     *     @type bool $boolean_value
     *           The boolean value 
     *     @type float $double_value
     *           The (64 bits) floating point value 
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Event::initOnce();
        parent::__construct($data);
    }

    /**
     * The text value 
     *
     * Generated from protobuf field <code>string text_value = 1;</code>
     * @return string
     */
    public function getTextValue()
    {
        return $this->readOneof(1);
    }

    /**
     * The text value 
     *
     * Generated from protobuf field <code>string text_value = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTextValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * The (64 bits) integer value 
     *
     * Generated from protobuf field <code>sint64 number_value = 2;</code>
     * @return int|string
     */
    public function getNumberValue()
    {
        return $this->readOneof(2);
    }

    /**
     * The (64 bits) integer value 
     *
     * Generated from protobuf field <code>sint64 number_value = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNumberValue($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * The boolean value 
     *
     * Generated from protobuf field <code>bool boolean_value = 3;</code>
     * @return bool
     */
    public function getBooleanValue()
    {
        return $this->readOneof(3);
    }

    /**
     * The boolean value 
     *
     * Generated from protobuf field <code>bool boolean_value = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setBooleanValue($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * The (64 bits) floating point value 
     *
     * Generated from protobuf field <code>double double_value = 4;</code>
     * @return float
     */
    public function getDoubleValue()
    {
        return $this->readOneof(4);
    }

    /**
     * The (64 bits) floating point value 
     *
     * Generated from protobuf field <code>double double_value = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setDoubleValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->whichOneof("data");
    }

}


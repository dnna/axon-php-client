<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: control.proto

namespace Io\Axoniq\Axonserver\Grpc\Control\EventProcessorInfo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message containing information about the status of a Segment of a Tracking Event Processor 
 *
 * Generated from protobuf message <code>io.axoniq.axonserver.grpc.control.EventProcessorInfo.SegmentStatus</code>
 */
class SegmentStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID of the Segment for which the status is reported 
     *
     * Generated from protobuf field <code>int32 segment_id = 1;</code>
     */
    private $segment_id = 0;
    /**
     * Indicates whether the Segment has "Caught Up" with the Head of the Event Stream 
     *
     * Generated from protobuf field <code>bool caught_up = 2;</code>
     */
    private $caught_up = false;
    /**
     * Indicates whether the Segment is "Replaying" historic events after a Reset. 
     *
     * Generated from protobuf field <code>bool replaying = 3;</code>
     */
    private $replaying = false;
    /**
     * The fraction this segment processes. A fraction of 2 means 1/2, 4 means 1/4, etc.
     *
     * Generated from protobuf field <code>int32 one_part_of = 4;</code>
     */
    private $one_part_of = 0;
    /**
     * The approximate position of the token in the stream. 
     *
     * Generated from protobuf field <code>int64 token_position = 5;</code>
     */
    private $token_position = 0;
    /**
     * Information about the error state of the Segment, if applicable. 
     *
     * Generated from protobuf field <code>string error_state = 6;</code>
     */
    private $error_state = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $segment_id
     *           The ID of the Segment for which the status is reported 
     *     @type bool $caught_up
     *           Indicates whether the Segment has "Caught Up" with the Head of the Event Stream 
     *     @type bool $replaying
     *           Indicates whether the Segment is "Replaying" historic events after a Reset. 
     *     @type int $one_part_of
     *           The fraction this segment processes. A fraction of 2 means 1/2, 4 means 1/4, etc.
     *     @type int|string $token_position
     *           The approximate position of the token in the stream. 
     *     @type string $error_state
     *           Information about the error state of the Segment, if applicable. 
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Control::initOnce();
        parent::__construct($data);
    }

    /**
     * The ID of the Segment for which the status is reported 
     *
     * Generated from protobuf field <code>int32 segment_id = 1;</code>
     * @return int
     */
    public function getSegmentId()
    {
        return $this->segment_id;
    }

    /**
     * The ID of the Segment for which the status is reported 
     *
     * Generated from protobuf field <code>int32 segment_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setSegmentId($var)
    {
        GPBUtil::checkInt32($var);
        $this->segment_id = $var;

        return $this;
    }

    /**
     * Indicates whether the Segment has "Caught Up" with the Head of the Event Stream 
     *
     * Generated from protobuf field <code>bool caught_up = 2;</code>
     * @return bool
     */
    public function getCaughtUp()
    {
        return $this->caught_up;
    }

    /**
     * Indicates whether the Segment has "Caught Up" with the Head of the Event Stream 
     *
     * Generated from protobuf field <code>bool caught_up = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setCaughtUp($var)
    {
        GPBUtil::checkBool($var);
        $this->caught_up = $var;

        return $this;
    }

    /**
     * Indicates whether the Segment is "Replaying" historic events after a Reset. 
     *
     * Generated from protobuf field <code>bool replaying = 3;</code>
     * @return bool
     */
    public function getReplaying()
    {
        return $this->replaying;
    }

    /**
     * Indicates whether the Segment is "Replaying" historic events after a Reset. 
     *
     * Generated from protobuf field <code>bool replaying = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setReplaying($var)
    {
        GPBUtil::checkBool($var);
        $this->replaying = $var;

        return $this;
    }

    /**
     * The fraction this segment processes. A fraction of 2 means 1/2, 4 means 1/4, etc.
     *
     * Generated from protobuf field <code>int32 one_part_of = 4;</code>
     * @return int
     */
    public function getOnePartOf()
    {
        return $this->one_part_of;
    }

    /**
     * The fraction this segment processes. A fraction of 2 means 1/2, 4 means 1/4, etc.
     *
     * Generated from protobuf field <code>int32 one_part_of = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setOnePartOf($var)
    {
        GPBUtil::checkInt32($var);
        $this->one_part_of = $var;

        return $this;
    }

    /**
     * The approximate position of the token in the stream. 
     *
     * Generated from protobuf field <code>int64 token_position = 5;</code>
     * @return int|string
     */
    public function getTokenPosition()
    {
        return $this->token_position;
    }

    /**
     * The approximate position of the token in the stream. 
     *
     * Generated from protobuf field <code>int64 token_position = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTokenPosition($var)
    {
        GPBUtil::checkInt64($var);
        $this->token_position = $var;

        return $this;
    }

    /**
     * Information about the error state of the Segment, if applicable. 
     *
     * Generated from protobuf field <code>string error_state = 6;</code>
     * @return string
     */
    public function getErrorState()
    {
        return $this->error_state;
    }

    /**
     * Information about the error state of the Segment, if applicable. 
     *
     * Generated from protobuf field <code>string error_state = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setErrorState($var)
    {
        GPBUtil::checkString($var, True);
        $this->error_state = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SegmentStatus::class, \Io\Axoniq\Axonserver\Grpc\Control\EventProcessorInfo_SegmentStatus::class);


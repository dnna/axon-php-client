<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: control.proto

namespace Io\Axoniq\Axonserver\Grpc\Control;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message containing information about the status of a Tracking Event Processor 
 *
 * Generated from protobuf message <code>io.axoniq.axonserver.grpc.control.EventProcessorInfo</code>
 */
class EventProcessorInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The logical name of this processor. 
     *
     * Generated from protobuf field <code>string processor_name = 1;</code>
     */
    private $processor_name = '';
    /**
     * The mode in which this processor is reading Events, for example: 'Tracking' or 'Subscribing' 
     *
     * Generated from protobuf field <code>string mode = 2;</code>
     */
    private $mode = '';
    /**
     * The number of threads currently actively processing Events 
     *
     * Generated from protobuf field <code>int32 active_threads = 3;</code>
     */
    private $active_threads = 0;
    /**
     * Flag indicating whether the processor is running 
     *
     * Generated from protobuf field <code>bool running = 4;</code>
     */
    private $running = false;
    /**
     * Flag indicating whether the processor, when stopped, did so because of an irrecoverable Error 
     *
     * Generated from protobuf field <code>bool error = 5;</code>
     */
    private $error = false;
    /**
     * Status details of each of the Segments for which Events are being processed. This is only provided by Tracking
     *Event Processors.
     *
     * Generated from protobuf field <code>repeated .io.axoniq.axonserver.grpc.control.EventProcessorInfo.SegmentStatus segment_status = 6;</code>
     */
    private $segment_status;
    /**
     * The number of threads the processor has available to assign to Segments.
     *Will report 0 if all threads are assigned a Segment.
     *
     * Generated from protobuf field <code>int32 available_threads = 7;</code>
     */
    private $available_threads = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $processor_name
     *           The logical name of this processor. 
     *     @type string $mode
     *           The mode in which this processor is reading Events, for example: 'Tracking' or 'Subscribing' 
     *     @type int $active_threads
     *           The number of threads currently actively processing Events 
     *     @type bool $running
     *           Flag indicating whether the processor is running 
     *     @type bool $error
     *           Flag indicating whether the processor, when stopped, did so because of an irrecoverable Error 
     *     @type \Io\Axoniq\Axonserver\Grpc\Control\EventProcessorInfo\SegmentStatus[]|\Google\Protobuf\Internal\RepeatedField $segment_status
     *           Status details of each of the Segments for which Events are being processed. This is only provided by Tracking
     *          Event Processors.
     *     @type int $available_threads
     *           The number of threads the processor has available to assign to Segments.
     *          Will report 0 if all threads are assigned a Segment.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Control::initOnce();
        parent::__construct($data);
    }

    /**
     * The logical name of this processor. 
     *
     * Generated from protobuf field <code>string processor_name = 1;</code>
     * @return string
     */
    public function getProcessorName()
    {
        return $this->processor_name;
    }

    /**
     * The logical name of this processor. 
     *
     * Generated from protobuf field <code>string processor_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProcessorName($var)
    {
        GPBUtil::checkString($var, True);
        $this->processor_name = $var;

        return $this;
    }

    /**
     * The mode in which this processor is reading Events, for example: 'Tracking' or 'Subscribing' 
     *
     * Generated from protobuf field <code>string mode = 2;</code>
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * The mode in which this processor is reading Events, for example: 'Tracking' or 'Subscribing' 
     *
     * Generated from protobuf field <code>string mode = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMode($var)
    {
        GPBUtil::checkString($var, True);
        $this->mode = $var;

        return $this;
    }

    /**
     * The number of threads currently actively processing Events 
     *
     * Generated from protobuf field <code>int32 active_threads = 3;</code>
     * @return int
     */
    public function getActiveThreads()
    {
        return $this->active_threads;
    }

    /**
     * The number of threads currently actively processing Events 
     *
     * Generated from protobuf field <code>int32 active_threads = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setActiveThreads($var)
    {
        GPBUtil::checkInt32($var);
        $this->active_threads = $var;

        return $this;
    }

    /**
     * Flag indicating whether the processor is running 
     *
     * Generated from protobuf field <code>bool running = 4;</code>
     * @return bool
     */
    public function getRunning()
    {
        return $this->running;
    }

    /**
     * Flag indicating whether the processor is running 
     *
     * Generated from protobuf field <code>bool running = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setRunning($var)
    {
        GPBUtil::checkBool($var);
        $this->running = $var;

        return $this;
    }

    /**
     * Flag indicating whether the processor, when stopped, did so because of an irrecoverable Error 
     *
     * Generated from protobuf field <code>bool error = 5;</code>
     * @return bool
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Flag indicating whether the processor, when stopped, did so because of an irrecoverable Error 
     *
     * Generated from protobuf field <code>bool error = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkBool($var);
        $this->error = $var;

        return $this;
    }

    /**
     * Status details of each of the Segments for which Events are being processed. This is only provided by Tracking
     *Event Processors.
     *
     * Generated from protobuf field <code>repeated .io.axoniq.axonserver.grpc.control.EventProcessorInfo.SegmentStatus segment_status = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSegmentStatus()
    {
        return $this->segment_status;
    }

    /**
     * Status details of each of the Segments for which Events are being processed. This is only provided by Tracking
     *Event Processors.
     *
     * Generated from protobuf field <code>repeated .io.axoniq.axonserver.grpc.control.EventProcessorInfo.SegmentStatus segment_status = 6;</code>
     * @param \Io\Axoniq\Axonserver\Grpc\Control\EventProcessorInfo\SegmentStatus[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSegmentStatus($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Io\Axoniq\Axonserver\Grpc\Control\EventProcessorInfo\SegmentStatus::class);
        $this->segment_status = $arr;

        return $this;
    }

    /**
     * The number of threads the processor has available to assign to Segments.
     *Will report 0 if all threads are assigned a Segment.
     *
     * Generated from protobuf field <code>int32 available_threads = 7;</code>
     * @return int
     */
    public function getAvailableThreads()
    {
        return $this->available_threads;
    }

    /**
     * The number of threads the processor has available to assign to Segments.
     *Will report 0 if all threads are assigned a Segment.
     *
     * Generated from protobuf field <code>int32 available_threads = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setAvailableThreads($var)
    {
        GPBUtil::checkInt32($var);
        $this->available_threads = $var;

        return $this;
    }

}

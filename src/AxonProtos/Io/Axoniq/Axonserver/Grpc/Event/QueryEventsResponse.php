<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: event.proto

namespace Io\Axoniq\Axonserver\Grpc\Event;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A message describing a response to a Query request 
 *
 * Generated from protobuf message <code>io.axoniq.axonserver.grpc.event.QueryEventsResponse</code>
 */
class QueryEventsResponse extends \Google\Protobuf\Internal\Message
{
    protected $data;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Io\Axoniq\Axonserver\Grpc\Event\ColumnsResponse $columns
     *           Provided when the response contains the names of the columns the response contains. This message typically arrives first. 
     *     @type \Io\Axoniq\Axonserver\Grpc\Event\RowResponse $row
     *           Provided when the response message contains results of the Query  
     *     @type \Io\Axoniq\Axonserver\Grpc\Event\Confirmation $files_completed
     *           Provided when all historic events have been included in the query results 
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Event::initOnce();
        parent::__construct($data);
    }

    /**
     * Provided when the response contains the names of the columns the response contains. This message typically arrives first. 
     *
     * Generated from protobuf field <code>.io.axoniq.axonserver.grpc.event.ColumnsResponse columns = 1;</code>
     * @return \Io\Axoniq\Axonserver\Grpc\Event\ColumnsResponse
     */
    public function getColumns()
    {
        return $this->readOneof(1);
    }

    /**
     * Provided when the response contains the names of the columns the response contains. This message typically arrives first. 
     *
     * Generated from protobuf field <code>.io.axoniq.axonserver.grpc.event.ColumnsResponse columns = 1;</code>
     * @param \Io\Axoniq\Axonserver\Grpc\Event\ColumnsResponse $var
     * @return $this
     */
    public function setColumns($var)
    {
        GPBUtil::checkMessage($var, \Io\Axoniq\Axonserver\Grpc\Event\ColumnsResponse::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Provided when the response message contains results of the Query  
     *
     * Generated from protobuf field <code>.io.axoniq.axonserver.grpc.event.RowResponse row = 2;</code>
     * @return \Io\Axoniq\Axonserver\Grpc\Event\RowResponse
     */
    public function getRow()
    {
        return $this->readOneof(2);
    }

    /**
     * Provided when the response message contains results of the Query  
     *
     * Generated from protobuf field <code>.io.axoniq.axonserver.grpc.event.RowResponse row = 2;</code>
     * @param \Io\Axoniq\Axonserver\Grpc\Event\RowResponse $var
     * @return $this
     */
    public function setRow($var)
    {
        GPBUtil::checkMessage($var, \Io\Axoniq\Axonserver\Grpc\Event\RowResponse::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Provided when all historic events have been included in the query results 
     *
     * Generated from protobuf field <code>.io.axoniq.axonserver.grpc.event.Confirmation files_completed = 3;</code>
     * @return \Io\Axoniq\Axonserver\Grpc\Event\Confirmation
     */
    public function getFilesCompleted()
    {
        return $this->readOneof(3);
    }

    /**
     * Provided when all historic events have been included in the query results 
     *
     * Generated from protobuf field <code>.io.axoniq.axonserver.grpc.event.Confirmation files_completed = 3;</code>
     * @param \Io\Axoniq\Axonserver\Grpc\Event\Confirmation $var
     * @return $this
     */
    public function setFilesCompleted($var)
    {
        GPBUtil::checkMessage($var, \Io\Axoniq\Axonserver\Grpc\Event\Confirmation::class);
        $this->writeOneof(3, $var);

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

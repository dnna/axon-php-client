<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Io\Axoniq\Axonserver\Grpc\Event;

/**
 * Service providing operations against the EventStore functionality of Axon Server 
 */
class EventStoreClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Accepts a stream of Events returning a Confirmation when completed.
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AppendEvent($metadata = [], $options = []) {
        return $this->_clientStreamRequest('/io.axoniq.axonserver.grpc.event.EventStore/AppendEvent',
        ['\Io\Axoniq\Axonserver\Grpc\Event\Confirmation','decode'],
        $metadata, $options);
    }

    /**
     * Accepts a Snapshot event returning a Confirmation when completed.
     * @param \Io\Axoniq\Axonserver\Grpc\Event\Event $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AppendSnapshot(\Io\Axoniq\Axonserver\Grpc\Event\Event $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.axoniq.axonserver.grpc.event.EventStore/AppendSnapshot',
        $argument,
        ['\Io\Axoniq\Axonserver\Grpc\Event\Confirmation', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves the Events for a given aggregate. Results are streamed rather than returned at once.
     * @param \Io\Axoniq\Axonserver\Grpc\Event\GetAggregateEventsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListAggregateEvents(\Io\Axoniq\Axonserver\Grpc\Event\GetAggregateEventsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.axoniq.axonserver.grpc.event.EventStore/ListAggregateEvents',
        $argument,
        ['\Io\Axoniq\Axonserver\Grpc\Event\Event', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves the Snapshots for a given aggregate. Results are streamed rather than returned at once.
     * @param \Io\Axoniq\Axonserver\Grpc\Event\GetAggregateSnapshotsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListAggregateSnapshots(\Io\Axoniq\Axonserver\Grpc\Event\GetAggregateSnapshotsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/io.axoniq.axonserver.grpc.event.EventStore/ListAggregateSnapshots',
        $argument,
        ['\Io\Axoniq\Axonserver\Grpc\Event\Event', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves the Events from a given tracking token. Results are streamed rather than returned at once.
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListEvents($metadata = [], $options = []) {
        return $this->_bidiRequest('/io.axoniq.axonserver.grpc.event.EventStore/ListEvents',
        ['\Io\Axoniq\Axonserver\Grpc\Event\EventWithToken','decode'],
        $metadata, $options);
    }

    /**
     * Gets the highest sequence number for a specific aggregate.
     * @param \Io\Axoniq\Axonserver\Grpc\Event\ReadHighestSequenceNrRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ReadHighestSequenceNr(\Io\Axoniq\Axonserver\Grpc\Event\ReadHighestSequenceNrRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.axoniq.axonserver.grpc.event.EventStore/ReadHighestSequenceNr',
        $argument,
        ['\Io\Axoniq\Axonserver\Grpc\Event\ReadHighestSequenceNrResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Performs a query on the event store, returns a stream of results. Input is a stream to allow flow control from the
     * client
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function QueryEvents($metadata = [], $options = []) {
        return $this->_bidiRequest('/io.axoniq.axonserver.grpc.event.EventStore/QueryEvents',
        ['\Io\Axoniq\Axonserver\Grpc\Event\QueryEventsResponse','decode'],
        $metadata, $options);
    }

    /**
     * Retrieves the first token available in event store (typically 0). Returns 0 when no events in store.
     * @param \Io\Axoniq\Axonserver\Grpc\Event\GetFirstTokenRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetFirstToken(\Io\Axoniq\Axonserver\Grpc\Event\GetFirstTokenRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.axoniq.axonserver.grpc.event.EventStore/GetFirstToken',
        $argument,
        ['\Io\Axoniq\Axonserver\Grpc\Event\TrackingToken', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves the last committed token in event store. Returns -1 when no events in store.
     * @param \Io\Axoniq\Axonserver\Grpc\Event\GetLastTokenRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetLastToken(\Io\Axoniq\Axonserver\Grpc\Event\GetLastTokenRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.axoniq.axonserver.grpc.event.EventStore/GetLastToken',
        $argument,
        ['\Io\Axoniq\Axonserver\Grpc\Event\TrackingToken', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves the token of the first token of an event from specified time in event store. Returns -1 when no events in store.
     * @param \Io\Axoniq\Axonserver\Grpc\Event\GetTokenAtRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetTokenAt(\Io\Axoniq\Axonserver\Grpc\Event\GetTokenAtRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/io.axoniq.axonserver.grpc.event.EventStore/GetTokenAt',
        $argument,
        ['\Io\Axoniq\Axonserver\Grpc\Event\TrackingToken', 'decode'],
        $metadata, $options);
    }

}

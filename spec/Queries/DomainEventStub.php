<?php namespace spec\EventSourcery\EventSourcery\Queries;

use EventSourcery\EventSourcery\EventSourcing\DomainEvent;

class DomainEventStub implements DomainEvent {

    /** @var int */
    private $number;

    public function __construct(int $number = 0) {
        $this->number = $number;
    }

    public function number() {
        return $this->number;
    }
}
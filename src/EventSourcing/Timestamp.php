<?php namespace EventSourcery\EventSourcery\EventSourcing;

class Timestamp  {

    /** @var \DateTimeImmutable */
    private $dateTime;

    private function __construct(\DateTimeImmutable $dateTime) {
        $this->dateTime = $dateTime;
    }

    public static function fromString($timeString, $timeZone): Timestamp {
        return new static(new \DateTimeImmutable($timeString, new \DateTimeZone($timeZone)));
    }

    public function toMysqlDateTime(): string {
        return $this->dateTime->format('Y-m-d H:i:s');
    }
}

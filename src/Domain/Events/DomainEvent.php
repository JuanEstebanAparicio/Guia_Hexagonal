<?php

abstract class DomainEvent
{
    private $occurredOn;

    public function __construct()
    {
        $this->occurredOn = new DateTimeImmutable();
    }

    public function occurredOn()
    {
        return $this->occurredOn;
    }
}
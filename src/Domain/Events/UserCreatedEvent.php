<?php

require_once __DIR__ . '/DomainEvent.php';

class UserCreatedEvent extends DomainEvent
{
    private $userId;

    public function __construct($userId)
    {
        parent::__construct();

        $this->userId = $userId;
    }

    public function userId()
    {
        return $this->userId;
    }
}
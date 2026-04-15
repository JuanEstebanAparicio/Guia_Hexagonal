<?php

require_once __DIR__ . '/../Exceptions/InvalidUserIdException.php';

class UserId
{
    private $value;

    public function __construct($value)
    {
        if (empty($value)) {
            throw InvalidUserIdException::becauseValueIsEmpty();
        }

        $this->value = $value;
    }

    public function value()
    {
        return $this->value;
    }
}
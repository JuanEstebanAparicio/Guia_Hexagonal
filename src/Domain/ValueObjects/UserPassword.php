<?php

require_once __DIR__ . '/../Exceptions/InvalidUserPasswordException.php';

class UserPassword
{
    private $value;
    private const MIN_LENGTH = 6;

    public function __construct($value)
    {
        if(empty($value)) {
            throw InvalidUserPasswordException::becauseValueIsEmpty();
        }

        if(strlen($value) < self::MIN_LENGTH) {
            throw InvalidUserPasswordException::becauseValueIsTooShort(self::MIN_LENGTH);
        }

        $this->value = $value;
    }
       
    public function value()
    {
        return $this->value;
    }
}
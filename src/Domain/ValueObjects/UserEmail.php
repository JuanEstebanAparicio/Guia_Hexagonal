<?php

require_once __DIR__ . '/../Exceptions/InvalidUserEmailException.php';

class UserEmail
{
    private $value;

    public function __construct($value)
    {
        if(empty($value)) {
            throw InvalidUserEmailException::becauseValueIsInvalid();
        }

        if(!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            throw InvalidUserEmailException::becauseFormatIsInvalid();
        }

        $this->value = $value;
    }

    public function value()
    {
        return $this->value;
    }
}
<?php

require_once __DIR__ . '/../Exceptions/InvalidUserNameException.php';

class UserName
{
    private $value;
    private const MAX_LENGTH = 3;

    public function __construct($value)
    {
        if(empty($value)) {
            throw InvalidUserNameException::becauseValueIsEmpty();
        }

        if(strlen($value) < self::MAX_LENGTH) {
            throw InvalidUserNameException::becauseLengthIsTooShort(self::MIN_LENGTH);
        }

        $this->value = $value;
    }

    public function value()
    {
        return $this->value;
    }

}
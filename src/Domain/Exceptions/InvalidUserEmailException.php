<?php

class InvalidEmailException extends InvalidArgumentException
{
    public static function becauseFormatIsInvalid($email)
    {
        return new self('El formato de email es invalido:' . $email);
    }

    public static function becauseValueIsEmpty()
    {
        return new self('El email del usuario no puede estar vacío.');
    }
}
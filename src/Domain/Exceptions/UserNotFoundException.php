<?php

class UserNotFoundException extends DomainException
{
    public static function becauseIdWasNotFound($id)
    {
        return new self('No se encontro un usuario con el ID: ' . $id);
    }
}
<?php

require_once __DIR__ . '/../Exceptions/InvalidUserIdException.php';

class UserId
{
  private int $value;

  public function __construct($value)
  {
    $normalized = (int) $value;

    if($normalized <= 0) {
        throw InvalidUserIdException::becauseValueIsEmpty();
    }

    $this-> value = $normalized;
  }

  public function value(): int { return $this->value; }
  public function equals(UserId $other): bool { return $this->value === $other->value(); }
  public function __toString(): string { return (string) $this->value; }
}
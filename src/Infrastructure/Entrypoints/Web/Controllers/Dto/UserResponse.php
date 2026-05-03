<?php

declare(strict_types=1);

final class UserResponse
{
    private int $id;
    private string $name;
    private string $email;
    private string $role;
    private string $status;

    public function __construct(
        int $id, string $name, string $email, string $role, string $status
    ) {
        $this->id       = $id;
        $this->name     = trim($name);
        $this->email    = trim($email);
        $this->role     = trim($role);
        $this->status   = trim($status);
    }

    public function getId(): int { return $this->id; }
    public function getName(): string { return $this->name; }
    public function getEmail(): string { return $this->email; }
    public function getRole(): string { return $this->role; }
    public function getStatus(): string { return $this->status; }

    public function id(): int { return $this->getId(); }
    public function name(): string { return $this->getName(); }
    public function email(): string { return $this->getEmail(); }
    public function role(): string { return $this->getRole(); }
    public function status(): string { return $this->getStatus(); }

    public function toArray(): array
    {
        return array(
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'role' => $this->role,
            'status' => $this->status,
        );
    }

}
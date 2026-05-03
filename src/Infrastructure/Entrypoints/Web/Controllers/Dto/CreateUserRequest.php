<?php

declare(strict_types=1);

final class CreateUserWebRequest
{
    private ?int $id;
    private string $name;
    private string $email;
    private string $password;
    private string $role;

    public function __construct(
        ?int $id, string $name, string $email, string $password, string $role
    ) {
        $this->id       = $id;
        $this->name     = trim($name);
        $this->email    = trim($email);
        $this->password = trim($password);
        $this->role     = trim($role);

    }

    public function getId(): ?int { return $this->id; }
    public function getName(): string { return $this->name; }
    public function getEmail(): string { return $this->email; }
    public function getPassword(): string { return $this->password; }
    public function getRole(): string { return $this->role; }
}

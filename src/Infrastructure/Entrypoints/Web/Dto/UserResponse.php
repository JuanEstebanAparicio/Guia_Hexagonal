<?php

declare(strict_types=1);

final class UserResponse
{
    private int $id;
    private string $name;
    private string $email;
    private string $role;
    private string $status;
    private ?string $createdAt;
    private ?string $updatedAt;

    public function __construct(
        int $id,
        string $name,
        string $email,
        string $role,
        string $status,
        ?string $createdAt,
        ?string $updatedAt
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
        $this->status = $status;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }

    public function id(): int { return $this->id; }
    public function name(): string { return $this->name; }
    public function email(): string { return $this->email; }
    public function role(): string { return $this->role; }
    public function status(): string { return $this->status; }
    public function createdAt(): ?string { return $this->createdAt; }
    public function updatedAt(): ?string { return $this->updatedAt; }
}
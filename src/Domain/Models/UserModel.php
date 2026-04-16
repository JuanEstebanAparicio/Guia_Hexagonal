<?php

require_once __DIR__ . '/../ValueObjects/UserId.php';
require_once __DIR__ . '/../ValueObjects/UserName.php';
require_once __DIR__ . '/../ValueObjects/UserEmail.php';
require_once __DIR__ . '/../ValueObjects/UserPassword.php';

require_once __DIR__ . '/../Enums/UserRoleEnum.php';
require_once __DIR__ . '/../Enums/UserStatusEnum.php';

require_once __DIR__ . '/../events/DomainEvent.php';

class UserModel
{
    private $id;
    private $name;
    private $email;
    private $password;
    private $role;
    private $status;

    private $events = [];

    public function __construct(
        UserId $id,
        UserName $name,
        UserEmail $email,
        UserPassword $password,
        $role,
        $status
    ) {

        UserRoleEnum::ensureValidValue($role);
        UserStatusEnum::ensureIsValid($status);

        $this-> id = $id;
        $this-> name = $name;
        $this-> email = $email;
        $this-> password = $password;
        $this-> role = $role;
        $this-> status = $status;

    }

    public static function create(
        UserId $id,
        UserName $name,
        UserEmail $email,
        UserPassword $password,
    ) {
        $user = new self(
            $id,
            $name,
            $email,
            $password,
            UserRoleEnum::MEMBER,
            UserStatusEnum::PENDING
        );

        $user->recordEvent(new UserCreatedEvent($id->value()));

        return $user;
    }

    private function recordEvent(DomainEvent $event)
    {
        $this->event[] = $event;
    }

    public function pullEvents()
    {
        $event = $this->events;
        $this->events = [];

        return $event;
    }

    public function id()
    {
        return $this->id;
    }
    public function name()
    {
        return $this->name;
    }
    public function email()
    {
        return $this->email;
    }
    public function password()
    {
        return $this->password;
    }
    public function role()
    {
        return $this->role;
    }
    public function status()
    {
        return $this->status;
    }
}
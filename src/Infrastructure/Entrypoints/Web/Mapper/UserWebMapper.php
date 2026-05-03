<?php

declare(strict_types=1);

require_once __DIR__ . '/Dto/CreateUserWebRequest.php';
require_once __DIR__ . '/Dto/UpdateUserWebRequest.php';
require_once __DIR__ . '/Dto/UserResponse.php';

require_once __DIR__ . '/../../../../Application/Services/Dto/Commands/CreateUserCommand.php';
require_once __DIR__ . '/../../../../Application/Services/Dto/Commands/UpdateUserCommand.php';
require_once __DIR__ . '/../../../../Application/Services/Dto/Commands/DeleteUserCommand.php';
require_once __DIR__ . '/../../../../Application/Services/Dto/Queries/GetUserByIdQuery.php';

require_once __DIR__ . '/../../../../Domain/Models/UserModel.php';

final class UserWebMapper
{
    /**
     * @param UserModel[] $users
     * @return UserResponse[]
     */
    public function fromModelsToResponses(array $users): array
    {
        $responses = [];
        foreach ($users as $user) {
            $responses[] = $this->fromModelToResponse($user);
        }
        return $responses;
    }

    public function fromModelToResponse(UserModel $user): UserResponse
    {
        return new UserResponse(
            $user->id()->value(),
            $user->name()->value(),
            $user->email()->value(),
            $user->role()->value(),
            $user->status()->value(),
            $user->createdAt(),
            $user->updatedAt()
        );
    }

    public function fromCreateRequestToCommand(CreateUserWebRequest $request): CreateUserCommand
    {
        return new CreateUserCommand(
            $request->id(),
            $request->name(),
            $request->email(),
            $request->password(),
            $request->role()
        );
    }

    public function fromUpdateRequestToCommand(UpdateUserWebRequest $request): UpdateUserCommand
    {
        return new UpdateUserCommand(
            $request->id(),
            $request->name(),
            $request->email(),
            $request->password(),
            $request->role()
        );
    }

    public function fromIdToGetByIdQuery(string $id): GetUserByIdQuery
    {
        return new GetUserByIdQuery($id);
    }

    public function fromIdToDeleteCommand(string $id): DeleteUserCommand
    {
        return new DeleteUserCommand($id);
    }
}
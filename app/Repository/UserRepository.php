<?php

namespace App\Repository;

use App\Http\Resources\UserResource;
use App\Interfaces\UserInterface;
use App\Models\User;

class UserRepository extends BaseRepositoryImplementation implements UserInterface
{
    public function model()
    {
        return User::class;
    }

    public function getFilterItems($filter)
    {
        // TODO: Implement getFilterItems() method.
    }

    public function getUser()
    {
        $users = $this->all();

        return UserResource::collection($users);
    }

    public function showUser(User $user)
    {
        $user = $this->getById($user->id);

        return UserResource::make($user);
    }

    public function createUser(array $datauser)
    {
        $user = $this->create($datauser);

        return UserResource::make($user);
    }

    public function updateUser(array $datauser, User $user)
    {
        $user = $this->updateById($user->id, $datauser);

        return UserResource::make($user);

    }

    public function deleteUser(User $user)
    {
        $this->deleteById($user->id);

        return response()->json(['message' => 'delete successfully']);
    }
}

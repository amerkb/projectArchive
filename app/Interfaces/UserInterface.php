<?php

namespace App\Interfaces;

use App\Models\User;

interface UserInterface
{
    public function getUser();

    public function showUser(User $user);

    public function createUser(array $datauser);

    public function updateUser(array $datauser, User $user);

    public function deleteUser(User $user);
}

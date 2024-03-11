<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest\CreateUserRequest;
use App\Http\Requests\UserRequest\UpdateUserRequest;
use App\Interfaces\UserInterface;
use App\Models\User;

class UserController extends Controller
{
    public function __construct(private UserInterface $user)
    {

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->user->getUser();

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateUserRequest $request)
    {
        return $this->user->createUser($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return $this->user->showUser($user);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        return $this->user->updateUser($request->validated(), $user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        return $this->user->deleteUser($user);
    }
}

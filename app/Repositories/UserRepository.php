<?php


namespace App\Repositories;


use App\User;

class UserRepository implements UserRepositoryInterface
{
    public function store(array $array): User
    {
        return User::create($array);
    }
}

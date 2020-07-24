<?php


namespace App\Repositories;

use App\User;

interface UserRepositoryInterface
{
    public function store(array $array): User;
}

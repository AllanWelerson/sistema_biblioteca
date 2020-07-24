<?php


namespace App\Repositories;


use App\Entities\Author;

interface AuthorRepositoryInterface
{
    public function store(array $array): Author;
}

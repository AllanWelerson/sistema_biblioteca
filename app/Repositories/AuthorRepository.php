<?php


namespace App\Repositories;


use App\Entities\Author;

class AuthorRepository implements AuthorRepositoryInterface
{
    public function store(array $array): Author
    {
        return Author::create($array);
    }
}

<?php


namespace App\Repositories;


use App\Entities\Book;

interface BookRepositoryInterface
{
    public function store(array $array): Book;
}

<?php


namespace App\Repositories;


use App\Entities\Book;

class BookRepository implements BookRepositoryInterface
{
    public function store(array $array): Book
    {
        return Book::create($array);
    }
}

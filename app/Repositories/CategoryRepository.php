<?php


namespace App\Repositories;

use App\Entities\Category;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function store(array $array): Category
    {
        return Category::create($array);
    }
}

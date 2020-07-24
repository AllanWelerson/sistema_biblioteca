<?php

namespace App\Repositories;

use App\Entities\Category;

interface CategoryRepositoryInterface
{
    public function store(array $array): Category;
}

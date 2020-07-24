<?php


namespace App\Repositories;

use App\Entities\Address;
use App\Entities\Category;

class AddressRepository implements AddressRepositoryInterface
{
    public function store(array $array): Address
    {
        return Category::create($array);
    }
}

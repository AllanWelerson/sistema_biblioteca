<?php

namespace App\Repositories;

use App\Entities\Address;

interface AddressRepositoryInterface
{
    public function store(array $array): Address;
}

<?php

namespace App\Repositories;

use App\Entities\PublishingCompany;

interface PublishingCompanyRepositoryInterface
{
    public function store(array $array): PublishingCompany;
}

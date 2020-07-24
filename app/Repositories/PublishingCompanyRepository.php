<?php

namespace App\Repositories;

use App\Entities\PublishingCompany;

class PublishingCompanyRepository implements PublishingCompanyRepositoryInterface
{
    public function store(array $array): PublishingCompany
    {
        return PublishingCompany::create($array);
    }
}

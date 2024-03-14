<?php

namespace App\Services;

use App\Models\Interest;
use App\Services\Interfaces\IInterestService;

class InterestService extends BaseService implements IInterestService
{

    public function __construct(Interest $model)
    {
        $this->model = $model;
    }

    public function getInterestsForDropdown()
    {
        return $this->model->pluck('name', 'id')->toArray();
    }
}

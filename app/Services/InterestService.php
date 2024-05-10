<?php

namespace App\Services;

use App\Models\Interest;
use App\Services\Interfaces\IInterestService;
use Illuminate\Support\Facades\Cache;

class InterestService extends BaseService implements IInterestService
{

    public function __construct(Interest $model)
    {
        $this->model = $model;
    }

    public function getInterestsForDropdown()
    {
        return Cache::remember('interests', now()->addDay(), function () {
            return $this->model->pluck('name', 'id')->toArray();
        });
    }
}

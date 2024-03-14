<?php

namespace App\Services;

use App\Models\User;
use App\Services\Interfaces\IUserService;

class UserService extends BaseService implements IUserService
{
    public function __construct(User $model)
    {
        $this->model = $model;
    }
}

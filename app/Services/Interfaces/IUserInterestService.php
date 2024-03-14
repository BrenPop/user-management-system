<?php

namespace App\Services\Interfaces;

interface IUserInterestService extends IBaseService
{
    public function saveUserInterests(int $userId, array $interestIds);
}

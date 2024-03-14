<?php

namespace App\Services;

use App\Models\UserInterest;
use App\Services\Interfaces\IUserInterestService;

class UserInterestService extends BaseService implements IUserInterestService
{
    public function __construct(UserInterest $model)
    {
        $this->model = $model;
    }

    public function getUserInterests(int $userId)
    {
        return $this->model->where('user_id', $userId)->get()->pluck('interest_id')->toArray();
    }

    public function saveUserInterests(int $userId, array $interestIds)
    {
        // delete all user interests
        $this->model->where('user_id', $userId)->delete();

        // save new
        $data = [];
        foreach ($interestIds as $interestId) {
            $data[] = [
                'user_id' => $userId,
                'interest_id' => $interestId,
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        $this->model->insert($data);
    }
}

<?php

namespace App\Services;

use App\Models\Language;
use App\Services\Interfaces\ILanguageService;

class LanguageService extends BaseService implements ILanguageService
{
    public function __construct(Language $model)
    {
        $this->model = $model;
    }

    public function getLanguagesForDropdown()
    {
        return $this->model->pluck('name', 'id')->toArray();
    }
}

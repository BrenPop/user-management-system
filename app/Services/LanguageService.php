<?php

namespace App\Services;

use App\Models\Language;
use App\Services\Interfaces\ILanguageService;
use Illuminate\Support\Facades\Cache;

class LanguageService extends BaseService implements ILanguageService
{
    public function __construct(Language $model)
    {
        $this->model = $model;
    }

    public function getLanguagesForDropdown()
    {
        return Cache::remember('languages', now()->addDay(), function () {
            return $this->model->pluck('name', 'id')->toArray();
        });
    }
}

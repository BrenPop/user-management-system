<?php

namespace App\Services\Interfaces;

interface ILanguageService extends IBaseService
{
    public function getLanguagesForDropdown();
}

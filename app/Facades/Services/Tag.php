<?php namespace App\Facades\Services;

use Illuminate\Support\Facades\Facade;

class Tag extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'tagService';
    }
}

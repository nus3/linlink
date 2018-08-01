<?php namespace App\Facades\Services;

use Illuminate\Support\Facades\Facade;

class Link extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'linkService';
    }
}

<?php namespace App\Facades\Helpers;

use Illuminate\Support\Facades\Facade;

class UrlManipulator extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'urlManipulator';
    }
}

<?php namespace App\Facades\Models;

use Illuminate\Support\Facades\Facade;

class Access extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'accessModel';
    }
}

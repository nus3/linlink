<?php namespace App\Facades\Models;

use Illuminate\Support\Facades\Facade;

class Tag extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'tagModel';
    }
}

<?php namespace App\Facades\Models;

use Illuminate\Support\Facades\Facade;

class Link extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'linkModel';
    }
}

<?php namespace App\Facades\Components;

use Illuminate\Support\Facades\Facade;

class Scraper extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'scraper';
    }
}

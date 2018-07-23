<?php namespace App\ORM;

use App\ORM\Eloquent;

class Link extends Eloquent
{
    protected $table = 'links';

    protected $guarded = ['id'];
}

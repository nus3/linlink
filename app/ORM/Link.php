<?php namespace App\ORM;

use App\ORM\Eloquent;

class Link extends Eloquent
{
    protected $table = 'links';

    protected $guarded = ['id'];

    public function tags()
    {
        return $this->belongsToMany('App\ORM\Tag', 'link_tag')
            ->whereNull('link_tag.deleted_at')
            ->withTimestamps();
    }

    public function accesses()
    {
        return $this->hasMany('App\ORM\Access');
    }
}

<?php namespace App\ORM;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use SoftDeletes;

    protected $table = 'tags';

    protected $guarded = ['id'];

    protected $dates = ['deleted_at'];

    public function links()
    {
        return $this->belongsToMany('App\ORM\Link', 'link_tag')
            ->whereNull('link_tag.deleted_at')
            ->withTimestamps();
    }
}

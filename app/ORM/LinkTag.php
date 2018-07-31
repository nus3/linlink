<?php namespace App\ORM;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LinkTag extends Model
{
    use SoftDeletes;

    protected $table = 'link_tag';

    protected $guarded = ['id'];

    protected $dates = ['deleted_at'];
}

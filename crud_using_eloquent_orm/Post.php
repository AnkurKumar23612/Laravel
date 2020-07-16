<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //

    protected $fillable=[
    		'title',
    		'body',
    		'is_admin'

    ];


    use SoftDeletes;

    protected $dates=['deleted_at'];



}

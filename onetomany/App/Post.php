<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    //mask assigned

    protected $fillable = [
        'title', 
        'body'
    ];
}

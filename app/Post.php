<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $table = 'posts';
    public $primatyKey = 'id';
    public $timestamps = true;

}

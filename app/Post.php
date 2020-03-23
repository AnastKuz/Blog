<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //relationships between post and user
    protected $table = 'posts';
}

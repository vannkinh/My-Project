<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name
    protected $table = 'posts';
    //Primary Key
    public $primaryKey = 'id';
    //Timetamps
    public $timestamps = true;
}

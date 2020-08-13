<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name
    // protected $table = 'posts';
    //Primary Key
    // public $primaryKey = 'id';
    //Timetamps
    // public $timestamps = true;
    
    // public function toArray($request)
    // {
    //     return parent::toArray($request);
    // }
    protected $table ="posts";
    public $timestamps = false;

    protected $fillable = [
        'title',
        'body',
    ];
}

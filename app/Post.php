<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    public $primaryKey = 'id';
    public $fillable = ['id','title','content','video','image','created_at','updated_at','deleted_at'];
    public $dates = ['created_at','updated_at' ,'deleted_at'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Massage extends Model
{
    protected $fillable =['title','content','created_at','updated_at'];
    public $dates = ['created_at','updated_at'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Danhmuc extends Model
{
    //
    protected $table="Danhmuc";
    public function nhachothue()
    {
    	return $this->hasMany('App\Nhatrochothue','Tiêu_đề','id');
    }
}

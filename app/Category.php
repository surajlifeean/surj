<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

	protected $table='categories';
    //since convention is not followed i.e category->categorys

    public function posts()
    {
    	return $this->hasMany('App\Post');
    }
}

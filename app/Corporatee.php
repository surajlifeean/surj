<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corporatee extends Model
{
    //

public $timestamps = false;
public function users()
    {
        return $this->belongsTo('App\User');
    }
    
}

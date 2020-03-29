<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function items()
    {
    	$this->hasMany('App\Item');
    }
}

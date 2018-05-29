<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class programming_language extends Model
{
    public function developers(){
    	return $this->belongsToMany(developer::class);
    }
}

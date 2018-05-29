<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class developer extends Model
{
    public function programming_languages()
    {
    	return $this->belongsToMany(programming_language::class);
    }
    public function languages(){
    	return $this->belongsToMany(language::class);
    }
}

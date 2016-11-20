<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absenguru extends Model
{
    protected $table ='absenguru';

    public function guru(){

    	return $this->belongsTo('App\Guru');
    }
    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perijinan extends Model
{
    protected $table = 'perijinan';

    public function guru(){

    	return $this->belongsTo('App\Guru');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = 'jabatan';

    public function guru(){

    	return $this->belongsTo('App\Guru');
    }
}

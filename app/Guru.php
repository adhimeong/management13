<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    //
    protected $table = 'guru';

    public function jabatan(){

    	return $this->belongsTo('App\Jabatan');
    }
}

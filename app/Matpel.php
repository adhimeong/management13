<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matpel extends Model
{
    //
    protected $table = 'matpel';

    public function jurusan(){

    	return $this->belongsTo('App\Jurusan');
    }
}

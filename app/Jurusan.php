<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    
    protected $table = 'jurusan';

    public function kelas(){

    	return $this->hasMany('App\Kelas');
    }

    public function matpel(){
    	return $this->hasMany('App\Matpel');
    }
}

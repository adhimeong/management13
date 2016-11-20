<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwalpel extends Model
{
    //
    protected $table = 'jadwalpel';

    
    public function guru(){

    	return $this->belongsTo('App\Guru');
    }

    public function matpel(){

    	return $this->belongsTo('App\Matpel');
    }

    public function kelas(){

    	return $this->belongsTo('App\Kelas');
    }

    public function jampel(){
        return $this->belongsTo('App\Jampel');
    }    
}

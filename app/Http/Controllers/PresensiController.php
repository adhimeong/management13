<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Presensi;
use App\Guru;
use App\Jadwalpel;
use App\Http\Requests;

class PresensiController extends Controller
{
    
    public function search(Request $request)
    {
        $nip = $request->get('nip');
        $guru = Guru::where('nip', $nip)->first();
        if (!$guru) {
            abort(404);
        }
        $jadwal = Jadwalpel::where('guru_id', $guru->id)->first();
        $Jadwalpel = $jadwal->jam_id;

        //date_default_timezone_set("Asia/Bangkok");
        //$waktudtg = date("H:i:s");
        return $Jadwalpel;
        //return view('presensi.detail')->with('guru', $guru);
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('presensi.index');
    }
}

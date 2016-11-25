<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Absenguru;
use App\Guru;
use App\Jadwalpel;
use App\Jampel;
use App\Http\Requests;

class AbsenguruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absenguru = Absenguru::all();

        return view('absenguru.index', compact('absenguru', $absenguru));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru = Guru::all();

        return view('absenguru.create', compact('guru', $guru));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //set time zone
        date_default_timezone_set("Asia/Bangkok");
        
        $this->validate($request, [
            'guru' => 'required',
        ]);

        $idguru = $request->guru;

        //cek jadwal pelajaran datang (ini masih belum selesai)
        $jamke = Jadwalpel::all()->where('guru_id', $idguru)->pluck('jam_id');
        $jadwaldatang = Jampel::where('id', $jamke)->pluck('awal')->first();
        $jam_datang = date('H:i:s');

        //ngitung point
        list($keterangan,$jml_jam,$sisamenit3,$poin)= self::prosesabsensi($jadwaldatang,$jam_datang);

        //save database
        $absenguru = new Absenguru;
        $absenguru->tanggal = date('y-m-d');
        $absenguru->guru_id = $idguru;
        $absenguru->jamdatang = $jam_datang;
        $absenguru->point = $poin;

        $absenguru->save();

        return view('absenguru.absen', compact('absenguru', 'keterangan', 'jml_jam', 'sisamenit3'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $absenguru = Absenguru::find($id);
        return view('absenguru.detail', compact('absenguru', $absenguru));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $absenguru = Absenguru::find($id);
        $absenguru->delete();
        return redirect('absenguru')->with('message','Data Absen Guru Sudah didelete');
    }



    public function prosesabsensi($jadwaldatang, $jam_datang) {

        //menghitung point dan keterlambatan    
        list($h,$m,$s) = explode(":",$jadwaldatang);
        $dtjdwl = mktime($h,$m,$s,"1","1","1");
        
        list($h,$m,$s) = explode(":",$jam_datang);
        $dtguru = mktime($h,$m,$s,"1","1","1");
            
            if ($dtjdwl < $dtguru) {

                $keterangan = "Anda Terlambat";
                $dtSelisih = $dtguru-$dtjdwl;
                $totalmenit=$dtSelisih/60;
                $jam =explode(".",$totalmenit/60);
                $sisamenit=($totalmenit/60)-$jam[0];
                $sisamenit2=$sisamenit*60;
                $sisamenit3=round($sisamenit2,0);
                $jml_jam=$jam[0];
                //untuk perhitungan poin
                $nilaipoin=$totalmenit/45;
                $poin=round(-$nilaipoin,0);     
            }else{

                $keterangan = "Anda Lebih Awal";
                $dtSelisih = $dtjdwl-$dtguru;
                $totalmenit=$dtSelisih/60;
                $jam =explode(".",$totalmenit/60);
                $sisamenit=($totalmenit/60)-$jam[0];
                $sisamenit2=$sisamenit*60;
                $sisamenit3=round($sisamenit2,0);
                $jml_jam=$jam[0];
                //untuk perhitungan poin
                $nilaipoin=$totalmenit/45;
                $poin=round($nilaipoin,0);
            }

        return  array($keterangan,$jml_jam,$sisamenit3,$poin);
    }
}

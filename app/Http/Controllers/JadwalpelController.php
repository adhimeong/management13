<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwalpel;
use App\Guru;
use App\Jampel;
use App\Matpel;
use App\Kelas;
use App\Http\Requests;

class JadwalpelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwalpel = Jadwalpel::paginate(10);

        return view('jadwalpel.index', compact('jadwalpel', $jadwalpel));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru = Guru::all();
        $jampel = Jampel::all();
        $matpel = Matpel::all();
        $kelas = Kelas::all();
        return view('jadwalpel.create', compact(['guru',$guru],['jampel', $jampel],['matpel', $matpel],['kelas',$kelas]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //proses validasi
        $this->validate($request, [
            'hari' => 'required',
            'guru' => 'required',
            'matpel' => 'required',
            'kelas' => 'required',
            'jampel' => 'required',
        ]);


        $jadwalpel = new Jadwalpel;
        $jadwalpel->guru_id = $request->guru;
        $jadwalpel->matpel_id = $request->matpel;
        $jadwalpel->jam_id = $request->jampel;
        $jadwalpel->kelas_id = $request->kelas;
        $jadwalpel->hari = $request->hari;

        $jadwalpel->save();

        return redirect('jadwalpel')->with('message','Data Jadwal Pelajaran Sudah ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jadwalpel = Jadwalpel::find($id);

        return view('jadwalpel.detail', compact('jadwalpel', $jadwalpel));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jadwalpel = Jadwalpel::find($id);

        $guru = Guru::all();
        $jampel = Jampel::all();
        $matpel = Matpel::all();
        $kelas = Kelas::all();
        return view('jadwalpel.edit', compact(['jadwalpel', $jadwalpel],['guru',$guru],['jampel', $jampel],['matpel', $matpel],['kelas',$kelas]));
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
        //proses validasi
        $this->validate($request, [
            'hari' => 'required',
            'guru' => 'required',
            'matpel' => 'required',
            'kelas' => 'required',
            'jampel' => 'required',
        ]);


        $jadwalpel = Jadwalpel::find($id);
        $jadwalpel->guru_id = $request->guru;
        $jadwalpel->matpel_id = $request->matpel;
        $jadwalpel->jam_id = $request->jampel;
        $jadwalpel->kelas_id = $request->kelas;
        $jadwalpel->hari = $request->hari;

        $jadwalpel->save();

        return redirect('jadwalpel')->with('message','Data Jadwal Pelajaran Sudah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jadwalpel = Jadwalpel::find($id);
        $jadwalpel->delete();
        return redirect('jadwalpel')->with('message','Data Jadwal Pelajaran Sudah dihapus');
    }
}

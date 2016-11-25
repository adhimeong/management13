<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perijinan;
use App\Guru;
use App\Http\Requests;

class PerijinanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perijinan = Perijinan::paginate(10);

        return view('perijinan.index', compact('perijinan', $perijinan));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru = Guru::all();

        return view('perijinan.create', compact('guru', $guru));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'guru' => 'required',
            'awal' => 'required',
            'keterangan' => 'required',
        ]);

        $perijinan = new Perijinan;
        $perijinan->guru_id = $request->guru;
        $perijinan->awal = $request->awal;
        $perijinan->akhir = $request->akhir;
        $perijinan->surat_id = $request->surat;
        $perijinan->keterangan = $request->keterangan;

        $perijinan->save();

        return redirect('perijinan')->with('message','Data Perijinan Sudah ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $perijinan = Perijinan::find($id);

        return view('perijinan.detail', compact('perijinan', $perijinan));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guru = Guru::all();
        $perijinan = Perijinan::find($id);

        return view('perijinan.edit', compact(['perijinan', $perijinan], ['guru', $guru]));
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
        $this->validate($request, [
            'guru' => 'required',
            'awal' => 'required',
            'keterangan' => 'required',
        ]);

        $perijinan = Perijinan::find($id);
        $perijinan->guru_id = $request->guru;
        $perijinan->awal = $request->awal;
        $perijinan->akhir = $request->akhir;
        $perijinan->surat_id = $request->surat;
        $perijinan->keterangan = $request->keterangan;

        $perijinan->save();

        return redirect('perijinan')->with('message','Data Perijinan Sudah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perijinan = Perijinan::find($id);
        $perijinan->delete();

        return redirect('perijinan')->with('message','Data Perijinan Sudah didelete');
    }
}

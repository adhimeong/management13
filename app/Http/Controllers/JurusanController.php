<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jurusan;
use App\Http\Requests;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusan = Jurusan::all();
        return view('jurusan.index',compact('jurusan', $jurusan));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jurusan.create');
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
            'kode' => 'required',
            'nama' => 'required',
        ]);

        $jurusan = new Jurusan;
        $jurusan->kode_jurusan = $request->kode;
        $jurusan->nama_jurusan = $request->nama;
        $jurusan->keterangan = $request->keterangan;

        $jurusan->save();

        return redirect('jurusan')->with('message','Data Jurusan Sudah ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jurusan = Jurusan::find($id);
        
        if (!$jurusan) {
            abort(404);        
        }

        return view('jurusan.detail', compact('jurusan', $jurusan));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jurusan = Jurusan::find($id);
        
        if (!$jurusan) {
            abort(404);        
        }

        return view('jurusan.edit', compact('jurusan', $jurusan));
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
            'kode' => 'required',
            'nama' => 'required',
            'keterangan' => 'required'
        ]);

        $jurusan = Jurusan::find($id);
        $jurusan->kode_jurusan = $request->kode;
        $jurusan->nama_jurusan = $request->nama;
        $jurusan->keterangan = $request->keterangan;

        $jurusan->save();

        return redirect('jurusan')->with('message','Data Jurusan Sudah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jurusan = Jurusan::find($id);
        $jurusan->delete();

        return redirect('jurusan')->with('message','Data Jurusan Sudah dihapus');

    }
}
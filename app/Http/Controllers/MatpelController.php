<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matpel;
use App\Jurusan;
use App\Http\Requests;

class MatpelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matpel = Matpel::paginate(10);

        return view('matpel.index', compact('matpel', $matpel));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusan = Jurusan::all();

        return view('matpel.create',compact('jurusan', $jurusan));
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
            'nama' => 'required',
            'jenis' => 'required',
            'jurusan' => 'required',
        ]);

        $matpel = new Matpel;
        $matpel->nama_pelajaran = $request->nama;
        $matpel->jenis_pelajaran = $request->jenis;
        $matpel->jurusan_id = $request->jurusan;

        $matpel->save();

        return redirect('matpel')->with('message','Data Mata Pelajaran Sudah ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $matpel = Matpel::find($id);

        return view('matpel.detail', compact('matpel', $matpel));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $matpel = Matpel::find($id);
        $jurusan = Jurusan::all();

        return view('matpel.edit', compact(['matpel', $matpel],['jurusan', $jurusan]));
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
            'nama' => 'required',
            'jenis' => 'required',
            'jurusan' => 'required',
        ]);

        $matpel = Matpel::find($id);
        $matpel->nama_pelajaran = $request->nama;
        $matpel->jenis_pelajaran = $request->jenis;
        $matpel->jurusan_id = $request->jurusan;

        $matpel->save();

        return redirect('matpel')->with('message','Data Mata Pelajaran Sudah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $matpel = Matpel::find($id);
        $matpel->delete();
        return redirect('matpel')->with('message','Data Mata Pelajaran Sudah dihapus');
    }
}

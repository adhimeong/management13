<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use App\Jurusan;
use App\Http\Requests;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = Kelas::paginate(10);
        return view('kelas.index', compact('kelas', $kelas)); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $jurusan = Jurusan::all();

        return view('kelas.create',compact('jurusan', $jurusan));
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
            'rombel' => 'required',
            'jurusan' => 'required',
            'tingkat' => 'required',
        ]);

        $kelas = new Kelas;
        $kelas->tingkat = $request->tingkat;
        $kelas->jurusan_id = $request->jurusan;
        $kelas->rombel = $request->rombel;

        $kelas->save();

        return redirect('kelas')->with('message','Data Kelas Sudah ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $kelas = Kelas::find($id);
        if (!$kelas) {
            abort(404);
        }

        return view('kelas.detail',compact('kelas', $kelas));   
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
        $kelas = Kelas::find($id);
        $jurusan = Jurusan::all();

        return view('kelas.edit',compact(['kelas', $kelas],['jurusan', $jurusan])); 
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
            'rombel' => 'required',
            'jurusan' => 'required',
            'tingkat' => 'required',
        ]);

        $kelas = Kelas::find($id);
        $kelas->tingkat = $request->tingkat;
        $kelas->jurusan_id = $request->jurusan;
        $kelas->rombel = $request->rombel;

        $kelas->save();

        return redirect('kelas')->with('message','Data Kelas Sudah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

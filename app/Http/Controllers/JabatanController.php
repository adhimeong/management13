<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jabatan;
use App\Guru;
use App\Http\Requests;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jabatan = Jabatan::paginate(5);

        return view('jabatan.index', compact('jabatan', $jabatan));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru = Guru::all();

        return view('jabatan.create', compact('guru', $guru));
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
            'jabatan' => 'required',
        ]);

        $jabatan = new Jabatan;
        $jabatan->guru_id = $request->guru;
        $jabatan->jabatan = $request->jabatan;

        $jabatan->save();

        return redirect('jabatan')->with('message','Data Jabatan Sudah ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jabatan = Jabatan::find($id);

        return view('jabatan.detail', compact('jabatan', $jabatan)); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jabatan = Jabatan::find($id);
        $guru = Guru::all();

        return view('jabatan.edit', compact(['jabatan', $jabatan],['guru', $guru])); 
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
            'jabatan' => 'required',
        ]);

        $jabatan = Jabatan::find($id);
        $jabatan->guru_id = $request->guru;
        $jabatan->jabatan = $request->jabatan;

        $jabatan->save();

        return redirect('jabatan')->with('message','Data Jabatan Sudah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jabatan = Jabatan::find($id);
        $jabatan->delete();
        return redirect('jabatan')->with('message','Data Jabatan Sudah dihapus');
    }
}

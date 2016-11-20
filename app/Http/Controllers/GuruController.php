<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;
use App\Http\Requests;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $listguru = Guru::paginate(10);

        return view('guru.index', ['guru' => $listguru]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guru.create');
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
            'nip' => 'required',
            'kontak' => 'required',
            'status' => 'required',
            'jk' => 'required',
        ]);

        //proses upload
        $file = $request->file('photo');
        $fileName   = $file->getClientOriginalName();
        $request->file('photo')->move("image/", $fileName);

        //proses input data
        $guru = new Guru;
        $guru->nama = $request->nama;
        $guru->nip = $request->nip;
        $guru->photo = $fileName;
        $guru->kontak = $request->kontak;
        $guru->status = $request->status;
        $guru->jenis_kelamin = $request->jk;
        $guru->alamat = $request->alamat;

        $guru->save();

        return redirect('guru')->with('message','Data Guru Sudah ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guru = Guru::find($id);
        if (!$guru) {
            abort(404);
        }
        return view('guru.detail')->with('guru', $guru);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guru = Guru::find($id);
        if (!$guru) {
            abort(404);
        }

        return view('guru.edit')->with('guru', $guru);
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
        //validasi
        $this->validate($request, [
            'nama' => 'required',
            'nip' => 'required',
            'kontak' => 'required',
            'status' => 'required',
            'jk' => 'required',
        ]);


        //update
        $guru = Guru::find($id);
        $guru->nama = $request->nama;
        $guru->nip = $request->nip;
        $guru->photo = $request->photo;
        $guru->kontak = $request->kontak;
        $guru->status = $request->status;
        $guru->jenis_kelamin = $request->jk;
        $guru->alamat = $request->alamat;

        //foto update
        if ($request->file('photo') == NULL) {
            //datanya tetap
            $guru->photo = $request->photolama;
        }else{
            //hapus fotolama belum

            //upload foto baru dan ganti database
            $file = $request->file('photo');
            $fileName   = $file->getClientOriginalName();
            $request->file('photo')->move("image/", $fileName);
            $guru->photo = $fileName;
            
        }

        $guru->save();

        return redirect('guru')->with('message','Data Guru Sudah diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guru = Guru::find($id);
        $guru->delete();
        return redirect('guru')->with('message','Data Guru Sudah dihapus');
    }
}

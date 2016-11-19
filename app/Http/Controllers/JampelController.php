<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jampel;
use App\Http\Requests;

class JampelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jampel = Jampel::all();

        return view('jampel.index', compact('jampel', $jampel));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jampel.create');
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
            'jam' => 'required',
            'awal' => 'required',
            'akhir' => 'required',
        ]);

        $jampel = new Jampel;
        $jampel->jam = $request->jam;
        $jampel->awal = $request->awal;
        $jampel->akhir = $request->akhir;

        $jampel->save();

        return redirect('jampel')->with('message','Data Jam Pelajaran Sudah ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jampel = Jampel::find($id);

        return view('jampel.detail', compact('jampel', $jampel));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jampel = Jampel::find($id);

        return view('jampel.edit', compact('jampel', $jampel));
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
            'jam' => 'required',
            'awal' => 'required',
            'akhir' => 'required',
        ]);

        $jampel = Jampel::find($id);
        $jampel->jam = $request->jam;
        $jampel->awal = $request->awal;
        $jampel->akhir = $request->akhir;

        $jampel->save();

        return redirect('jampel')->with('message','Data Jam Pelajaran Sudah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jampel = Jampel::find($id);
        $jampel->delete();
        return redirect('jampel')->with('message','Data Jam Pelajaran Sudah dihapus');
    }
}

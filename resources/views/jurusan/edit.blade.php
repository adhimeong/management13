@extends('themes.template')

@section('content')

<h3>Tambah Jurusan</h3>

<form action="/jurusan/{{ $jurusan->id }}" method="POST">
	Kode Jurusan : <br>
	<input type="text" name="kode" value="{{ $jurusan->kode_jurusan }}"> <br>
	Nama Jurusan : <br>
	<input type="text" name="nama" value="{{ $jurusan->nama_jurusan }}"> <br>
	Keterangan : <br>
	<textarea name="keterangan" cols="30" rows="10">{{ $jurusan->keterangan }}</textarea><br>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="_method" value="PUT">
	<input type="submit" value="KIRIM">
</form>

@stop
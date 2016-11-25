@extends('themes.template')

@section('content')

<h3>Detail Perijinan & Tugas Dinas </h3>

<a href="/jabatan">Kembali</a> <br>

<p>{{ $perijinan->guru->nama}}</p>
<p>{{ $perijinan->awal }}</p>
<p>{{ $perijinan->akhir }}</p>
<p>{{ $perijinan->surat_id }}</p>
<p>{{ $perijinan->keterangan }}</p>

<a href="/perijinan/{{ $perijinan->id }}/edit">edit</a>
<form action="/perijinan/{{$perijinan->id}}" method="POST">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="_method" value="DELETE">
	<input type="submit" value="delete">
</form>

@stop
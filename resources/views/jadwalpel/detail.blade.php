@extends('themes.template')

@section('content')

<h3>detail Jadwal Pelajaran</h3>

<a href="/jadwalpel">Kembali</a> <br>

	<p>{{ $jadwalpel->hari }}</p>
	<p>{{ $jadwalpel->jam_id}}</p>
	<p>{{ $jadwalpel->guru->nama }}</p>
	<p>{{ $jadwalpel->matpel->nama_pelajaran }}</p>
	<p>{{ $jadwalpel->kelas->tingkat }} - {{ $jadwalpel->kelas->jurusan->nama_jurusan }} - {{ $jadwalpel->kelas->rombel}}</p>

<a href="/jadwalpel/{{ $jadwalpel->id }}/edit">edit</a>
<form action="/jadwalpel/{{$jadwalpel->id}}" method="POST">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="_method" value="DELETE">
	<input type="submit" value="delete">
</form>

@stop
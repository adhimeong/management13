@extends('themes.template')

@section('content')

<h3>detail Kelas</h3>

<a href="/kelas">Kembali</a> <br>

<p>{{ $kelas->tingkat }} - {{ $kelas->jurusan->nama_jurusan }} - {{ $kelas->rombel }}</p> <br>

<a href="/kelas/{{ $kelas->id }}/edit">edit</a>
<form action="/kelas/{{$kelas->id}}" method="POST">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="_method" value="DELETE">
	<input type="submit" value="delete">
</form>

@stop
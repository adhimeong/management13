@extends('themes.template')

@section('content')

<h3>detail Jabatan</h3>

<a href="/jabatan">Kembali</a> <br>

<p>{{ $jabatan->guru->nama }} - {{ $jabatan->jabatan }}</p> <br>

<a href="/jabatan/{{ $jabatan->id }}/edit">edit</a>
<form action="/jabatan/{{$jabatan->id}}" method="POST">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="_method" value="DELETE">
	<input type="submit" value="delete">
</form>

@stop
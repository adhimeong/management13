@extends('themes.template')

@section('content')

{{ Session::get('message') }}


<a href="/">MENU UTAMA</a> <br>

<h3>List Absen Guru</h3>

<a href="/absenguru/create">Absen Guru</a> <br>


@foreach($absenguru as $data)

	<p>{{ $data->tanggal }}</p> <br>
	<p>{{ $data->guru->nama }}</p> <br>
	<p>{{ $data->jamdatang }}</p> <br>
	<p>{{ $data->jampulang }}</p> <br>
	<p>{{ $data->point }}</p> <br>

	<a href="/absenguru/{{ $data->id }}">detail</a>
	<a href="/absenguru/{{ $data->id }}/edit">edit</a>
	<form action="/absenguru/{{$data->id}}" method="POST">
    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">
		<input type="submit" value="delete">
    </form>
	<hr>
@endforeach

@stop
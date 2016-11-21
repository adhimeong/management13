@extends('themes.template')

@section('content')


{{ Session::get('message') }}

<a href="/">MENU UTAMA</a> <br>

<h3>List Guru </h3>

<a href="/guru/create">Tambah Guru</a> <br>

@foreach ($guru as $data)
    <img src="image/{{ $data->photo}}" style="width: 120px;">
    <p>Nama : {{ $data->nama }}</p>
    <p>NIP : {{ $data->nip }}</p>
    <p>Status Kepegawaian : {{ $data->status }}</p>
    <p>Jenis Kelamin : {{ $data->jenis_kelamin }}</p>
    <p>Kontak : {{ $data->kontak }}</p>
    <p>Alamat : {{ $data->alamat }}</p>
    <a href="/guru/{{$data->id}}">detail</a>
    <a href="/guru/{{$data->id}}/edit">edit</a>
    <form action="/guru/{{$data->id}}" method="POST">
    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">
		<input type="submit" value="delete">
    </form>
    <hr>
@endforeach

{!! $guru->links() !!}


@stop

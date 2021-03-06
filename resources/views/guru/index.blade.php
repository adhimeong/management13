@extends('themes.template')

@section('content')


{{ Session::get('message') }}

<h3>List Guru </h3>

<a href="/guru/create" class="btn waves-effect waves-light red">Tambah Guru</a> <br><br><br>

<div class="row">
    <div class="col s12">
        

@foreach ($guru as $data)
    <div class="col s4">
        <div class="card">
            <div style="padding: 20px; min-height: 150px;">
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
            </div>
        </div>
    </div>
@endforeach

{!! $guru->links() !!}


    </div>
</div>


@stop

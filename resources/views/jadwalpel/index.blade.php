@extends('themes.template')

@section('content')

{{ Session::get('message') }}


<h3>List Jadwal Pelajaran </h3>

<a href="/jadwalpel/create" class="btn waves-effect waves-light red">Tambah Jadwal Pelajaran</a><br><br><br><br>


<hr>

@foreach($jadwalpel as $data)

	<p>{{ $data->hari }}</p>
	<p>{{ $data->jam_id}}</p>
	<p>{{ $data->guru->nama }}</p>
	<p>{{ $data->matpel->nama_pelajaran }}</p>
	<p>{{ $data->kelas->tingkat }} - {{ $data->kelas->jurusan->nama_jurusan }} - {{ $data->kelas->rombel}}</p>

	<form action="/jadwalpel/{{$data->id}}" method="POST">
		<a href="/jadwalpel/{{ $data->id }}" class="btn waves-effect waves-light green"><i class="mdi-action-assignment"></i></a>
		<a href="/jadwalpel/{{ $data->id }}/edit" class="btn waves-effect waves-light orange"><i class="mdi-content-create"></i></a>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">
		<button class="btn waves-effect waves-light red" type="submit" onclick="return confirm('Anda yakin menghapus data');" ><i class="mdi-action-delete"></i></button>
	</form>
@endforeach

{!! $jadwalpel->links() !!}

@stop
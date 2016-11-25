@extends('themes.template')

@section('content')

{{ Session::get('message') }}


<h3>List Perijinan & Tugas Dinas</h3>

<a href="/perijinan/create" class="btn waves-effect waves-light red">Tambah Perijinan</a><br><br><br><br>

<div class="col s8 m6">
	<div class="container">
		<table class="striped">
		<tr>
			<th>Nama Guru</th>
			<th>Mulai Tanggal</th>
			<th>Akhir Tanggal</th>
			<th>No Surat</th>
			<th>Keterangan</th>
			<th>Aksi</th>
		</tr>

	@foreach($perijinan as $data)
	<tr>
		<td>{{ $data->guru->nama}}</td>
		<td>{{ $data->awal }}</td>
		<td>{{ $data->akhir }}</td>
		<td>{{ $data->surat_id }}</td>
		<td>{{ $data->keterangan }}</td>
		<td>
			<form action="/perijinan/{{$data->id}}" method="POST">
				<a href="/perijinan/{{ $data->id }}" class="btn waves-effect waves-light green"><i class="mdi-action-assignment"></i></a>
				<a href="/perijinan/{{ $data->id }}/edit" class="btn waves-effect waves-light orange"><i class="mdi-content-create"></i></a>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="_method" value="DELETE">
				<button class="btn waves-effect waves-light red" type="submit" onclick="return confirm('Anda yakin menghapus data');" ><i class="mdi-action-delete"></i></button>
			</form>
	    </td>
    </tr>	
	@endforeach
	</table>	
	</div>
</div>

{!! $perijinan->links() !!}

@stop
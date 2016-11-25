@extends('themes.template')

@section('content')

{{ Session::get('message') }}


<h3>List Jurusan</h3>

<a href="/jurusan/create" class="btn waves-effect waves-light red">Tambah Jurusan</a> <br><br><br><br>

<div class="col s8 m6">
	<div class="container">
		<table class="bordered striped">
		<tr>
			<th>Kode Jurusan</th>
			<th>Nama Jurusan</th>
			<th>Keterangan</th>
			<th>Aksi</th>
		</tr>

		@foreach($jurusan as $data)
		<tr>
			<td>{{ $data->kode_jurusan }}</td>
			<td>{{ $data->nama_jurusan }}</td>
			<td>{{ $data->keterangan }}</td>
			<td>
				<form action="/jurusan/{{$data->id}}" method="POST">
					<a href="/jurusan/{{ $data->id }}" class="btn waves-effect waves-light green"><i class="mdi-action-assignment"></i></a>
					<a href="/jurusan/{{ $data->id }}/edit" class="btn waves-effect waves-light orange"><i class="mdi-content-create"></i></a>
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

@stop
@extends('themes.template')

@section('content')

{{ Session::get('message') }}


<h3>List Jabatan</h3>

<a href="/jabatan/create" class="btn waves-effect waves-light red">Tambah Jabatan</a><br><br><br><br>

<div class="col s8 m6">
	<div class="container">
		<table class="striped">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Aksi</th>
		</tr>

	@foreach($jabatan as $data)
	<tr>
		<td>{{ $data->guru->nama}}</td>
		<td>{{ $data->jabatan }}</td>
		<td>
			<form action="/jabatan/{{$data->id}}" method="POST">
				<a href="/jabatan/{{ $data->id }}" class="btn waves-effect waves-light green"><i class="mdi-action-assignment"></i></a>
				<a href="/jabatan/{{ $data->id }}/edit" class="btn waves-effect waves-light orange"><i class="mdi-content-create"></i></a>
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

{!! $jabatan->links() !!}

@stop
@extends('themes.template')

@section('content')

{{ Session::get('message') }}


<h3>List Kelas</h3>

<a href="/kelas/create" class="btn waves-effect waves-light red">Tambah Kelas</a><br><br><br>

<div class="col s8 m6">
	<div class="container">
		<table class="bordered striped">
		<tr>
			<th>Kelas</th>
			<th>Jurusan</th>
			<th>Aksi</th>
		</tr>

		@foreach($kelas as $data)
		<tr>
			<td>{{ $data->tingkat }} - {{ $data->jurusan->nama_jurusan }} - {{ $data->rombel }}</td>
			<td>{{ $data->jurusan->nama_jurusan }}</td>
			<td>
				<form action="/kelas/{{$data->id}}" method="POST">
					<a href="/kelas/{{ $data->id }}" class="btn waves-effect waves-light green"><i class="mdi-action-assignment"></i></a>
					<a href="/kelas/{{ $data->id }}/edit" class="btn waves-effect waves-light orange"><i class="mdi-content-create"></i></a>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="_method" value="DELETE">
					<button class="btn waves-effect waves-light red" type="submit" onclick="return confirm('Anda yakin menghapus data');" ><i class="mdi-action-delete"></i></button>
				</form>
		    </td>
		<tr>
		@endforeach
		</table>	
	</div>
</div>

{!! $kelas->links() !!}

@stop
@extends('themes.template')

@section('content')

{{ Session::get('message') }}


<h3>List Mata Pelajaran</h3>

<a href="/matpel/create" class="btn waves-effect waves-light red">Tambah Mata Pelajaran</a> <br><br><br><br>

<div class="col s8 m6">
	<div class="container">
		<table class="bordered striped">
		<tr>
			<th>Mata Pelajaran</th>
			<th>Jenis pelajaran</th>
			<th>Jurusan</th>
			<th>Aksi</th>
		</tr>

		@foreach($matpel as $data)
		<tr>
			<td>{{ $data->nama_pelajaran }}</td>
			<td>{{ $data->jenis_pelajaran }}</td> 
			<td>
				@if($data->jurusan_id > 0)
					{{ $data->jurusan->nama_jurusan }}
				@else
					Umum
				@endif
			</td>
			<td>
				<form action="/matpel/{{$data->id}}" method="POST">
					<a href="/matpel/{{ $data->id }}" class="btn waves-effect waves-light green"><i class="mdi-action-assignment"></i></a>
					<a href="/matpel/{{ $data->id }}/edit" class="btn waves-effect waves-light orange"><i class="mdi-content-create"></i></a>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="_method" value="DELETE">
					<button class="btn waves-effect waves-light red" type="submit" onclick="return confirm('Anda yakin menghapus data');" ><i class="mdi-action-delete"></i></button>
				</form>
		    </td>
		@endforeach
		</table>	
	</div>
</div><br><br>
{!! $matpel->links() !!}

@stop
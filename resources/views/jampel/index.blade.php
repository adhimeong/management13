@extends('themes.template')

@section('content')

{{ Session::get('message') }}


<h3>List Jam Pelajaran</h3>

<a href="/jampel/create" class="btn waves-effect waves-light red" >Tambah Jam Pelajaran</a> <br><br><br>


<div class="col s8 m6">
	<div class="container">
		<table class="striped">
		<tr>
			<th>Jam Ke</th>
			<th>Awal Jam</th>
			<th>Akhir Jam</th>
			<th>Aksi</th>
		</tr>

		@foreach($jampel as $data)
		<tr>
			<td>{{ $data->jam }} </td> 
			<td>{{ $data->awal }} </td> 
			<td>{{ $data->akhir }}</td>
			<td>
				<form action="/jampel/{{$data->id}}" method="POST">
					<a href="/jampel/{{ $data->id }}" class="btn waves-effect waves-light green"><i class="mdi-action-assignment"></i></a>
					<a href="/jampel/{{ $data->id }}/edit" class="btn waves-effect waves-light orange"><i class="mdi-content-create"></i></a>
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
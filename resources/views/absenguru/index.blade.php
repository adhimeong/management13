@extends('themes.template')

@section('content')

{{ Session::get('message') }}


<h3>List Absen Guru</h3>

<a href="/absenguru/create" class="btn waves-effect waves-light red">Absen Guru</a> <br><br><br>


<table class="striped">
	<tr>
		<th>No</th>
		<th>Tanggal</th>
		<th>Nama Guru</th>
		<th>Jam Datang</th>
		<th>Jam Pulang</th>
		<th>Point</th>
		<th>Aksi</th>
	</tr>
<?php
	$no = 1;
?>
	
@foreach($absenguru as $data)
	<tr>
		<td><?php echo $no; ?></td>
		<td>{{ $data->tanggal }}</td> 
		<td>{{ $data->guru->nama }}</td> 
		<td>{{ $data->jamdatang }}</td> 
		<td>{{ $data->jampulang }}</td> 
		<td>{{ $data->point }}</td>
		<td>
			<form action="/absenguru/{{$data->id}}" method="POST">
			<a href="/absenguru/{{ $data->id }}" class="btn waves-effect waves-light green">detail</a>
			<a href="/absenguru/{{ $data->id }}/edit" class="btn waves-effect waves-light orange">edit</a>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="_method" value="DELETE">
				<button class="btn waves-effect waves-light red" type="submit" onclick="return confirm('Anda yakin menghapus data');" >Delete</button>
			</form>
	    </td>
	</tr>
	<?php
		$no++;
	?>
@endforeach

</table>

@stop
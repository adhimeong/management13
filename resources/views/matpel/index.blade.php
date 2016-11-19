{{ Session::get('message') }}

<h3>List Mata Pelajaran</h3>

<a href="/matpel/create">Tambah Mata Pelajaran</a> <br>

@foreach($matpel as $data)

	<p>{{ $data->nama_pelajaran }}</p>
	<p>{{ $data->jenis_pelajaran }}</p> 

	@if($data->jurusan_id > 0)
		{{ $data->jurusan->nama_jurusan }}
	@else
		Umum
	@endif
	<br>
	<a href="/matpel/{{ $data->id }}">detail</a>
	<a href="/matpel/{{ $data->id }}/edit">edit</a>
	<form action="/matpel/{{$data->id}}" method="POST">
    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">
		<input type="submit" value="delete">
    </form>
	<hr>
@endforeach

{!! $matpel->links() !!}
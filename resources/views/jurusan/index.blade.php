{{ Session::get('message') }}


<a href="/">MENU UTAMA</a> <br>

<h3>List Jurusan</h3>

<a href="/jurusan/create">Tambah Jurusan</a> <br>

@foreach($jurusan as $data)

	<p>{{ $data->kode_jurusan }}</p> <br>
	<p>{{ $data->nama_jurusan }}</p> <br>
	<p>{{ $data->keterangan }}</p> <br>
	<a href="/jurusan/{{ $data->id }}">detail</a>
	<a href="/jurusan/{{ $data->id }}/edit">edit</a>
	<form action="/jurusan/{{$data->id}}" method="POST">
    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">
		<input type="submit" value="delete">
    </form>
	<hr>
@endforeach
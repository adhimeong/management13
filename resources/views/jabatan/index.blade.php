{{ Session::get('message') }}

<a href="/">MENU UTAMA</a> <br>

<h3>List Jabatan</h3>

<a href="/jabatan/create">Tambah Jabatan</a>

@foreach($jabatan as $data)

	<p>{{ $data->guru->nama}}</p>
	<p>{{ $data->jabatan }}</p> <br>
	<a href="/jabatan/{{ $data->id }}">detail</a>
	<a href="/jabatan/{{ $data->id }}/edit">edit</a>
	<form action="/jabatan/{{$data->id}}" method="POST">
    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">
		<input type="submit" value="delete">
    </form>
	<hr>
@endforeach

{!! $jabatan->links() !!}
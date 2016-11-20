{{ Session::get('message') }}

<a href="/">MENU UTAMA</a> <br>

<h3>List Jam Pelajaran</h3>

<a href="/jampel/create">Tambah Jam Pelajaran</a> <br>

@foreach($jampel as $data)
	<p>{{ $data->jam }} - {{ $data->awal }} - {{ $data->akhir }}</p> <br>
	<a href="/jampel/{{ $data->id }}">detail</a>
	<a href="/jampel/{{ $data->id }}/edit">edit</a>
	<form action="/jampel/{{$data->id}}" method="POST">
    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">
		<input type="submit" value="delete">
    </form>
	<hr>
@endforeach
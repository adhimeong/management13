{{ Session::get('message') }}

<a href="/">MENU UTAMA</a> <br>

<h3>List Kelas</h3>

<a href="/kelas/create">Tambah Kelas</a>

@foreach($kelas as $data)

	<p>{{ $data->tingkat }} - {{ $data->jurusan->nama_jurusan }} - {{ $data->rombel }}</p> <br>
	<a href="/kelas/{{ $data->id }}">detail</a>
	<a href="/kelas/{{ $data->id }}/edit">edit</a>
	<form action="/kelas/{{$data->id}}" method="POST">
    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">
		<input type="submit" value="delete">
    </form>
	<hr>
@endforeach

{!! $kelas->links() !!}
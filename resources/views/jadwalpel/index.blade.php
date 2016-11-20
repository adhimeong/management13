{{ Session::get('message') }}

<a href="/">MENU UTAMA</a> <br>

<h3>List Jadwal Pelajaran </h3>

<a href="/jadwalpel/create">Tambah Jadwal Pelajaran</a>

@foreach($jadwalpel as $data)

	<p>{{ $data->hari }}</p>
	<p>{{ $data->jam_id}}</p>
	<p>{{ $data->guru->nama }}</p>
	<p>{{ $data->matpel->nama_pelajaran }}</p>
	<p>{{ $data->kelas->tingkat }} - {{ $data->kelas->jurusan->nama_jurusan }} - {{ $data->kelas->rombel}}</p>


	<a href="/jadwalpel/{{ $data->id }}">detail</a>
	<a href="/jadwalpel/{{ $data->id }}/edit">edit</a>
	<form action="/jadwalpel/{{$data->id}}" method="POST">
    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">
		<input type="submit" value="delete">
    </form>
	<hr>
@endforeach

{!! $jadwalpel->links() !!}
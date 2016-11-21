@extends('themes.template')

@section('content')

@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<h3>Tambah Jadwal Pelajaran</h3> <br>

<a href="/jadwalpel">Kembali</a> <br>

<form action="/jadwalpel" method="POST">

	Hari : <br>
	<select name="hari">
		<option value="senin">SENIN</option>
		<option value="selasa">SELASA</option>
		<option value="rabu">RABU</option>
		<option value="kamis">KAMIS</option>
		<option value="jumat">JUMAT</option>
		<option value="sabtu">SABTU</option>
		<option value="minggu">MINGGU</option>
	</select><br>
	Guru : <br>
	<select name="guru">
		@foreach ($guru as $data)
			<option value="{{ $data->id }}">{{ $data->nama }}</option>
		@endforeach
	</select> <br>
	
	Mata Pelajaran : <br>
	<select name="matpel">
		@foreach ($matpel as $data)
			<option value="{{ $data->id }}">{{ $data->nama_pelajaran }}</option>
		@endforeach
	</select> <br>

	Kelas : <br>
	<select name="kelas">
		@foreach ($kelas as $data)
			<option value="{{ $data->id }}">{{ $data->tingkat }} - {{ $data->jurusan->nama_jurusan }} - {{ $data->rombel }} </option>
		@endforeach
	</select> <br>

	Jam Pelajaran : <br>
	<select name="jampel">
		@foreach ($jampel as $data)
			<option value="{{ $data->id }}"> {{ $data->jam }} ~ ( {{ $data->awal }} - {{ $data->akhir }} )</option>
		@endforeach
	</select> <br>


	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" value="KIRIM">
</form>

@stop
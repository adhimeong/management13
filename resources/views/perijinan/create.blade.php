@extends('themes.template')

@section('content')

@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<h3>Tambah Perijinan / Tugas Dinas</h3> <br>


<form action="/perijinan" method="POST">
	
	Guru : <br>
	<select name="guru">
		@foreach ($guru as $data)
			<option value="{{ $data->id }}">{{ $data->nama }}</option>
		@endforeach
	</select> <br>

	Mulai Tanggal : <br>

  	<input type="text" name="awal"> <br>

	Sampai Tanggal : <br>
	<input type="text" name="akhir"><br>

	Nomor Surat :
	<input type="text" name="surat"> <br>

	Keterangan : <br>
	<input type="text" name="keterangan"><br>
	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" value="KIRIM">
</form>

@stop
@extends('themes.template')

@section('content')

@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<h3>Edit Perijinan / Tugas Dinas</h3> <br>

<?php
	$gurupil = $perijinan->guru_id;
?>

<form action="/perijinan/{{$perijinan->id}}" method="POST">
	
	Guru : <br>
	<select name="guru">
		@foreach ($guru as $data)
			<option value="{{ $data->id }}" <?php if($data->id == $gurupil){echo "selected";}?> >{{ $data->nama }}</option>
		@endforeach
	</select> <br>

	Mulai Tanggal : <br>

  	<input type="text" name="awal" value="{{ $perijinan->awal}}"> <br>

	Sampai Tanggal : <br>
	<input type="text" name="akhir" value="{{ $perijinan->akhir}}"><br>

	Nomor Surat :
	<input type="text" name="surat" value="{{ $perijinan->surat_id}}"> <br>

	Keterangan : <br>
	<input type="text" name="keterangan" value="{{ $perijinan->keterangan}}"><br>
	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="_method" value="PUT">
	<input type="submit" value="KIRIM">
</form>

@stop
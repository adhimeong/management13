@extends('themes.template')

@section('content')

<h3>Edit Data Guru</h3>


<form action="/guru/{{ $guru->id }}" method="POST" enctype="multipart/form-data">
	Foto : <br>
	<img src="{{ asset('image/'.$guru->photo)  }}" style="width: 150px;"> <br>
	<input type="file" name="photo"> <br>
	<input type="hidden" name="photolama" value="{{ $guru->photo }}"> <br>
	Nama : <br>
	<input type="text" name="nama" value="{{ $guru->nama }}"> <br>
	NIP : <br>
	<input type="text" name="nip" value="{{ $guru->nip }}"> <br>
	kontak : <br>
	<input type="text" name="kontak" value="{{ $guru->kontak }}"> <br>
	Status : <br>
	<select name="status">
		<option value="pns">PNS</option>
		<option value="nonpns">NON PNS</option>
	</select> <br>
	jenis kelamin :<br>
	
	{{ $jk = $guru->jenis_kelamin }}
	
	<input type="radio" name="jk" value="laki-laki" @if ( $jk  == "laki-laki")
		{{ "checked"}}
	@endif>Laki-Laki
	<input type="radio" name="jk" value="perempuan" @if ( $jk == "perempuan")
		{{ "checked"}}
	@endif>Perempuan <br>
	Alamat :<br>
	<textarea cols="30" rows="10" name="alamat">{{ $guru->alamat }}</textarea><br>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="_method" value="PUT">
	<input type="submit" value="KIRIM">
</form>

@stop
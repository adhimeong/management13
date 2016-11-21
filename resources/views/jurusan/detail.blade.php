@extends('themes.template')

@section('content')

<h3>Detail Jurusan</h3>

<a href="/jurusan">kembali</a>
<br>

{{ $jurusan->kode_jurusan }} <br>
{{ $jurusan->nama_jurusan }} <br>
{{ $jurusan->keterangan }} <br>

@stop
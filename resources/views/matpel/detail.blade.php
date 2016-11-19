<h3>Detail Mata Pelajaran</h3>

<a href="/matpel">kembali</a>
<br>

{{ $matpel->nama_pelajaran }} <br>
{{ $matpel->jenis_pelajaran }} <br>

@if($matpel->jurusan_id > 0)
	{{ $matpel->jurusan->nama_jurusan }} <br>
@else
	Umum
@endif

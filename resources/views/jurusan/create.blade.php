<h3>Tambah Jurusan</h3>

<form action="/jurusan" method="POST">
	Kode Jurusan : <br>
	<input type="text" name="kode"> <br>
	Nama Jurusan : <br>
	<input type="text" name="nama"> <br>
	Keterangan : <br>
	<textarea name="keterangan" cols="30" rows="10"></textarea><br>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" value="kIRIM">
</form>
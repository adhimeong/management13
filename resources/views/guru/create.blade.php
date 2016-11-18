
@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<h3>Input Data Guru</h3>


<form action="/guru" method="POST" enctype="multipart/form-data">
	Foto : <br>
	<input type="file" name="photo"> <br>
	Nama : <br>
	<input type="text" name="nama"> <br>
	NIP : <br>
	<input type="text" name="nip"> <br>
	Kontak : <br>
	<input type="text" name="kontak"> <br>
	Status : <br>
	<select name="status">
		<option value="pns">PNS</option>
		<option value="nonpns">NON PNS</option>
	</select> <br>
	Jenis Kelamin :<br>
	<input type="radio" name="jk" value="laki-laki">Laki-Laki
	<input type="radio" name="jk" value="perempuan">Perempuan <br>
	Alamat :<br>
	<textarea cols="30" rows="10" name="alamat"></textarea><br>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" value="KIRIM">
</form>
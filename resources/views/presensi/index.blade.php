
<h3>PRESENSI GURU SMKN 13 BANDUNG</h3>

<form action="{{ url('cari') }}" method="GET">
	MASUKAN NIP / NOMOR PEGAWAI : <br>
	<input type="text" name="nip"><br>
	<input type="submit" value="HADIR">
</form>

<table border="1">
	<tr>
		<th>NO</th>
		<th>NAMA</th>
		<th>JAM DATANG</th>
		<th>JAM PULANG</th>
		<th>POINT</th>
	</tr>
</table>
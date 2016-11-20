
@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<h3>Update Kelas</h3>

<a href="/kelas">Kembali</a> <br>
<?php
$tingkatpil = $kelas->tingkat; 
$jurusanpil = $kelas->jurusan_id;
$rombelpil = $kelas->rombel;
?>

<form action="/kelas/{{ $kelas->id}}" method="POST">
	Tingkat : <br>
	<select name="tingkat">
		<option value="X" <?php if($tingkatpil == "X"){echo "selected";}?> >X -- (tahun pertama)</option>
		<option value="XI" <?php if($tingkatpil == "XI"){echo "selected";}?> >XI -- (tahun kedua)</option>
		<option value="XII" <?php if($tingkatpil == "XII"){echo "selected";}?> >XII -- (tahun ketiga)</option>
		<option value="IV" <?php if($tingkatpil == "IV"){echo "selected";}?> >IV -- (tahun keempat)</option>	
	</select> <br>

	Jurusan : <br>
	<select name="jurusan">
		@foreach ($jurusan as $data)
			<option value="{{ $data->id }}" <?php if($data->id == $jurusanpil){echo "selected";}?> >{{ $data->nama_jurusan }}</option>
		@endforeach
	</select> <br>
	
	Rombel : <br>
	<select name="rombel">
		<option value="1" <?php if($rombelpil == 1){echo "selected";}?> > SATU </option>
		<option value="2" <?php if($rombelpil == 2){echo "selected";}?> > DUA </option>
		<option value="3" <?php if($rombelpil == 3){echo "selected";}?> > TIGA </option>
		<option value="4" <?php if($rombelpil == 4){echo "selected";}?> > EMPAT </option>
		<option value="5" <?php if($rombelpil == 5){echo "selected";}?> > LIMA </option>
		<option value="6" <?php if($rombelpil == 6){echo "selected";}?> > ENAM </option>
		<option value="7" <?php if($rombelpil == 7){echo "selected";}?> > TUJUH </option>
		<option value="8" <?php if($rombelpil == 8){echo "selected";}?> > DELAPAN </option>
		<option value="9" <?php if($rombelpil == 9){echo "selected";}?> > SEMBILAN </option>
		<option value="10" <?php if($rombelpil == 10){echo "selected";}?>> SEPULUH </option>	
	</select> <br>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="_method" value="PUT">
	<input type="submit" value="KIRIM">
</form>
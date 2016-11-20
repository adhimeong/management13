@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif


<?php
$haripil = $jadwalpel->hari;
$gurupil = $jadwalpel->guru_id;
$matpelpil = $jadwalpel->matpel_id;
$kelaspil = $jadwalpel->kelas_id;
$jampelpil = $jadwalpel->jam_id;

?>

<h3>Update Jadwal Pelajaran</h3> <br>

<a href="/jadwalpel">Kembali</a> <br>

<form action="/jadwalpel/{{ $jadwalpel->id }}" method="POST">

	Hari : <br>
	<select name="hari">
		<option value="senin" <?php if($haripil == "senin"){echo "selected";}?> >SENIN</option>
		<option value="selasa" <?php if($haripil == "selasa"){echo "selected";}?> >SELASA</option>
		<option value="rabu" <?php if($haripil == "rabu"){echo "selected";}?> >RABU</option>
		<option value="kamis" <?php if($haripil == "kamis"){echo "selected";}?> >KAMIS</option>
		<option value="jumat" <?php if($haripil == "jumat"){echo "selected";}?> >JUMAT</option>
		<option value="sabtu" <?php if($haripil == "sabtu"){echo "selected";}?> >SABTU</option>
		<option value="minggu" <?php if($haripil == "minggu"){echo "selected";}?> >MINGGU</option>
	</select><br>
	Guru : <br>
	<select name="guru">
		@foreach ($guru as $data)
			<option value="{{ $data->id }}" <?php if($data->id == $gurupil){echo "selected";}?> >{{ $data->nama }}</option>
		@endforeach
	</select> <br>
	
	Mata Pelajaran : <br>
	<select name="matpel">
		@foreach ($matpel as $data)
			<option value="{{ $data->id }}" <?php if($data->id == $matpelpil){echo "selected";}?> >{{ $data->nama_pelajaran }}</option>
		@endforeach
	</select> <br>

	Kelas : <br>
	<select name="kelas">
		@foreach ($kelas as $data)
			<option value="{{ $data->id }}" <?php if($data->id == $kelaspil){echo "selected";}?> >{{ $data->tingkat }} - {{ $data->jurusan->nama_jurusan }} - {{ $data->rombel }} </option>
		@endforeach
	</select> <br>

	Jam Pelajaran : <br>
	<select name="jampel">
		@foreach ($jampel as $data)
			<option value="{{ $data->id }}" <?php if($data->id == $jampelpil){echo "selected";}?> > {{ $data->jam }} ~ ( {{ $data->awal }} - {{ $data->akhir }} )</option>
		@endforeach
	</select> <br>


	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="_method" value="PUT">
	<input type="submit" value="KIRIM">
</form>
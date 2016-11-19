@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<?php
	$jenispil = $matpel->jenis_pelajaran; 
	$jurusanpil = $matpel->jurusan_id;
?>

<h3>Edit Mata Pelajaran</h3>

<form action="/matpel/{{ $matpel->id}}" method="POST">
	Mata Pelajaran : <br>
	<input type="text" name="nama" value="{{ $matpel->nama_pelajaran}}"> <br>
	Jenis Pelajaran : <br>
	<select name="jenis">
		<option value="Normatif" <?php if($jenispil == "Normatif"){echo "selected";}?> > NORMATIF </option>
		<option value="Adaptif"  <?php if($jenispil == "Adaptif"){echo "selected";}?> > ADAPTIF </option>
		<option value="Produktif"<?php if($jenispil == "Produktif"){echo "selected";}?> > PRODUKTIF </option>
		<option value="Mulok" <?php if($jenispil == "Mulok"){echo "selected";}?> > MULOK </option>
	</select><br>
	Jurusan : <br>
	<select name="jurusan">
		@foreach ($jurusan as $data)
			<option value="{{ $data->id }}" <?php if($data->id == $jurusanpil){echo "selected";}?> >{{ $data->nama_jurusan }}</option>
		@endforeach
	</select> <br>

	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="_method" value="PUT">
	<input type="submit" value="KIRIM">
</form>
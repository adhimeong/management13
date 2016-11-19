
@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<h3>Tambah Kelas</h3>


<form action="/kelas" method="POST">
	Tingkat : <br>
	<select name="tingkat">
		<option value="1">X -- (tahun pertama)</option>
		<option value="2">XI -- (tahun kedua)</option>
		<option value="3">XII -- (tahun ketiga)</option>
		<option value="4">IV -- (tahun keempat)</option>	
	</select> <br>

	Jurusan : <br>
	<select name="jurusan">
		@foreach ($jurusan as $data)
			<option value="{{ $data->id }}">{{ $data->nama_jurusan }}</option>
		@endforeach
	</select> <br>
	
	Rombel : <br>
	<select name="rombel">
		<option value="1"> SATU </option>
		<option value="2"> DUA </option>
		<option value="3"> TIGA </option>
		<option value="4"> EMPAT </option>
		<option value="5"> LIMA </option>
		<option value="6"> ENAM </option>
		<option value="7"> TUJUH </option>
		<option value="8"> DELAPAN </option>
		<option value="9"> SEMBILAN </option>
		<option value="10"> SEPULUH </option>	
	</select> <br>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" value="kIRIM">
</form>
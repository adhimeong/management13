@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<h3>Tambah Mata Pelajaran</h3>

<form action="/matpel" method="POST">
	Mata Pelajaran : <br>
	<input type="text" name="nama"> <br>
	Jenis Pelajaran : <br>
	<select name="jenis">
		<option value="Normatif"> NORMATIF </option>
		<option value="Adaptif"> ADAPTIF </option>
		<option value="Produktif"> PRODUKTIF </option>
		<option value="Mulok"> MULOK </option>
	</select><br>
	Jurusan : <br>
	<select name="jurusan">
		<option value="0"> Umum </option>
		@foreach ($jurusan as $data)
			<option value="{{ $data->id }}">{{ $data->nama_jurusan }}</option>
		@endforeach
	</select><br>

	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" value="KIRIM">
</form>
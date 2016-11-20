
@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<h3>Tambah Jabatan</h3> <br>

<a href="/jabatan">Kembali</a> <br>

<form action="/jabatan" method="POST">
	
	Guru : <br>
	<select name="guru">
		@foreach ($guru as $data)
			<option value="{{ $data->id }}">{{ $data->nama }}</option>
		@endforeach
	</select> <br>

	Jabatan : <br>
	<input type="text" name="jabatan"><br>
	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" value="KIRIM">
</form>
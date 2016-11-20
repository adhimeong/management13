
@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<h3>Tambah Jabatan</h3> <br>

<a href="/jabatan">Kembali</a> <br>

<?php
	$gurupil = $jabatan->guru_id;
?>

<form action="/jabatan/{{$jabatan->id}}" method="POST">
	
	Guru : <br>
	<select name="guru">
		@foreach ($guru as $data)
			<option value="{{ $data->id }}" <?php if($data->id == $gurupil){echo "selected";}?> >{{ $data->nama }}</option>
		@endforeach
	</select> <br>

	Jabatan : <br>
	<input type="text" name="jabatan" value="{{ $jabatan->jabatan}}"><br>
	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="_method" value="PUT">
	<input type="submit" value="KIRIM">
</form>
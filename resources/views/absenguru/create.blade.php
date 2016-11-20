@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<h3>Kehadiran Guru & Pegawai</h3>

<form action="/absenguru" method="POST">
	<select name="guru" style="font-size: 22px;">
		@foreach ($guru as $data)
			<option value="{{ $data->id }}"> {{ $data->nama }} </option>
		@endforeach
	</select> <br><br>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" value="ABSEN">
</form>
@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<h3>Edit Jam Pelajaran</h3>

<a href="/jampel">kembali</a>
<br>

<form action="/jampel/{{ $jampel->id }}" method="POST">
	Jam Pelajaran Ke : <br>
	<input type="text" name="jam" value="{{ $jampel->jam }}"> <br>
	Awal Jam Pelajawan : <br>
	<input type="text" name="awal" value="{{ $jampel->awal }}"> <i>dalam waktu</i> <br>
	Akhir Jam Pelajawan : <br>
	<input type="text" name="akhir" value="{{ $jampel->akhir }}"> <i>dalam waktu</i> <br>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="_method" value="PUT">
	<input type="submit" value="KIRIM">
</form>
@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<h3>Tambah Jam Pelajaran</h3>

<a href="/jampel">kembali</a>
<br>

<form action="/jampel" method="POST">
	Jam Pelajaran Ke : <br>
	<input type="text" name="jam"> <br>
	Awal Jam Pelajaran : <br>
	<input type="text" name="awal"> <i>dalam waktu</i> <br>
	Akhir Jam Pelajaran : <br>
	<input type="text" name="akhir"> <i>dalam waktu</i> <br>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" value="KIRIM">
</form>
<h3>Detail absen Guru</h3>

<a href="/absenguru">kembali</a>
<br>

<p>{{ $absenguru->tanggal }}</p> <br>
<p>{{ $absenguru->guru->nama }}</p> <br>
<p>{{ $absenguru->jamdatang }}</p> <br>
<p>{{ $absenguru->jampulang }}</p> <br>
<p>{{ $absenguru->point }}</p> <br>

<p>{{ $keterangan}} : {{ $jml_jam }} Jam {{ $sisamenit3 }} Menit</p>

<form action="/absenguru/{{$absenguru->id}}" method="POST">
    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">
		<input type="submit" value="BATAL">
    </form>

<a href="/absenguru"><button>OK</button></a>
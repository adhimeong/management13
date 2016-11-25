@extends('themes.template')

@section('content')

<h3>Status Absen Guru</h3>

<br>

<div class="row">
    <div class="col s12 m12">
    	<div class="card">
    		<table>
    			<tr>
    				<td rowspan="7"><img src="image/{{ $absenguru->guru->photo}}" style="width: 180px;"></td>
    			</tr>
    			<tr>
    				<td>Tanggal :</td>
    				<td>{{ $absenguru->tanggal }}</td>
    			</tr>
    			<tr>
    				<td>Nama :</td>
    				<td>{{ $absenguru->guru->nama }}</td>
    			</tr>
    			<tr>
    				<td>Jam Absen :</td>
    				<td>{{ $absenguru->jamdatang }}</td>
    			</tr>
    			<tr>
    				<td>Jam Pulang :</td>
    				<td>{{ $absenguru->jampulang }}</td>
    			</tr>
    			<tr>
    				<td>Point :</td>
    				<td>{{ $absenguru->point }}</td>
    			</tr>
    			<tr>
    				<td>Status :</td>
    				<td>{{ $keterangan}} : {{ $jml_jam }} Jam {{ $sisamenit3 }} Menit</td>
    			</tr>
    		</table>
            <hr>
			<form action="/absenguru/{{$absenguru->id}}" method="POST">
		    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="_method" value="DELETE">
				<input type="submit" class="btn waves-effect waves-light orange" value="BATAL">
                <a href="/absenguru" class="btn waves-effect waves-light green">OK</a>
		    </form>

		</div>
	</div>
</div>

@stop
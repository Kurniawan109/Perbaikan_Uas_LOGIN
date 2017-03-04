@extends('templates.index')
@section('content')
<article>
<form  action="{{route('mahasiswa.update', $mahasiswa->id)}}" method="post">
    <input name="_method" type="hidden" value="PATCH">
					{{csrf_field()}}
					<table border="1" width="75%" align="center">
			<tr>
				<th>Edit Data</th>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" class="form-control" placeholder="Nama" value="{{$mahasiswa->nama}}" size="70"></input></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim" class="form-control" placeholder="NIM" value="{{$mahasiswa->nim}}" size="70"></input></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat"  class="form-control" placeholder="Alamat" value="{{$mahasiswa->alamat}}" size="70"></input></td>
			</tr>
			<tr>

				<td colspan="3"><input type="submit" class="btn btn-primary" value="UPDATE"><a
				<td colspan="3" align="left"><a href="{{URL::to('halamanawal')}}"><button type="button">BATAL</button><a
			</tr>
			
		</table>
	</article>
@stop




















<style>
div.container {
	width: 100%;
	border 1px solid gray;
}

header, footer {
	padding: 1mm;
	color: white;
	background-color: black;
	clear: left;
	text-align: center;
	}
	
nav {
	float: left;
	max-width: 160px;
	margin: 0;
	padding: 1cm;
}
nav ul {
	list-style-type: none;
	padding: 0;
}
nav ul a {
	text-decoration: none;
}

artikle{
margin-left: 170px;
berder-left: 1px colid gray;
padding :1px;   
overflow; hidden;
}

thead tr {
background-color: black; 
color: white;
}

</style>

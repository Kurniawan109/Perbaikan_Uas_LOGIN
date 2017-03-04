@extends('templates.index')
@section('content')
<article>

<h2 align="center">Data Mahasiswa<h2>

	<form method = "post">
		<table border="1" width="70%" align="center">
			
			<thead>
			<tr>
				<td align=center>No</td>
				<td align=center>Nama</td>
				<td align=center>Nim</td>
				<td align=center>Alamat</td>
				<td align=center>Aksi</td>
			</tr>
			</thead>
			@foreach ($Mahasiswa as $mhs ) 	
		<tr>
				<td align=center> {{ $mhs -> id}}</td>
				<td align=center> {{ $mhs -> nama}}</td>
				<td align=center> {{ $mhs -> nim}}</td>
				<td align=center> {{ $mhs -> alamat}}</td>
                <td align=center><form method="POST"  action="{{ route('mahasiswa.destroy', $mhs->id) }}" >
		                            <input name="_method" type="hidden" value="DELETE">
		                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
		                            <a href="{{route('mahasiswa.edit', $mhs->id)}}" class="btn btn-primary"><input type="button" value="Edit"></a>
		                        	<input type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');" value="Delete">
		                        </form></td>
			 @endforeach
		</tr>
		<tr>
			<td colspan="3" align="center"><a href="{{URL::to('tambah')}}"><button type="button">TAMBAH</button><a>
			<form id="logout-form" action="{{ route('logout') }}" method="POST"> {{ csrf_field() }}
			<td colspan="3" align="center"><a href="{{URL::to('/')}}"><button type="submit">LOGOUT</button></a>
		</form>
		</tr>
		</table>
		
	</article>
@stop

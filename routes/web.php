<?php

use App\Mahasiswa;

route::get ('/', 'ViewController@index');
route::get ('/halamanawal', 'ViewController@chalamanawal');
route::get ('/tambah', 'ViewController@ctambah');
route::get ('/edit', 'ViewController@cedit');
route::get ('/add_items', 'viewcontroller@form_add');
Route::post('add_items/action', 'viewcontroller@add_action');


Route::resource('mahasiswa', 'viewcontroller');

/*Route::get('/', function(){
	return view('home');
});

Route::get('/halamanawal', function(){
	return view('halamanawal');
});

Route::get('/edit', function(){
	return view('edit');
});

Route::get('/tambah', function(){
	return view('tambah');
});
*/

/*Route::get('/tambah', function(){
$blog = new Blog;
$blog->judul ="judul";
$blog->deskripsi="Deskripsi";
$blog->save();

});

Route::get('/tambah',function(){
	$mahasiswa = new mahasiswa;
	$mahasiswa->nama ="Frencius";
	$mahasiswa->nim = "10109371";
	$mahasiswa->alamat = "Bandung";
	$mahasiswa->save();
});

/*Route::get('/ubah',function(){
	$mahasiswa=mahasiswa::find(1);
	$mahasiswa->nama = "Frencius Leo";
	$mahasiswa->nim = "111111";
	$mahasiswa->alamat = "Jakarta";
	$mahasiswa->save();
});

Route::get('/tampil',function(){
	$mahasiswa=mahasiswa::all();
	foreach($mahasiswa as $mhs){
		echo"<b>Nama</b>:";
		echo $mhs->nama;
		echo"<br><b>NIM</b>:";
		echo $mhs->nim;
		echo"<br><b>Alamat</b>:";
		echo $mhs->alamat;
	}
});

Route::get('/hapus',function(){
	$mahasiswa = Mahasiswa::find(1);
	$mahasiswa->delete();
});
*/




Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

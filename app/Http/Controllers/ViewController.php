<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mahasiswa;
use App\Http\Requests\UpdateRequest;


class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	return view ('home');
    }
    public function chalamanawal()
    {	$Mahasiswa = mahasiswa::all();
		return view('halamanawal', compact('Mahasiswa'));
    }
    public function ctambah()
    {
    return view ('tambah');
    }
    public function cedit()
    {
    return view ('edit');
    }
	 public function form_add()
    {
        return view::make ('tambah'); 
    }
    public function add_action(Request $request)
    {
        $mahasiswa             = new mahasiswa;
        $mahasiswa->nama       = $request->nama;
        $mahasiswa->nim        = $request->nim;
        $mahasiswa->alamat     = $request->alamat;
        $mahasiswa->save();

      
        return redirect ('halamanawal');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nama         = $request->nama;
        $mahasiswa->nim          = $request->nim;
        $mahasiswa->alamat       = $request->alamat;
        $mahasiswa->save();
		

        
		return redirect ('halamanawal');
        //return redirect('halamanawal')->with('alert-success', 'Data Berhasil Diubah.');
		
	
	}
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa -> delete();
        return redirect('halamanawal')->with('alert-success', 'Data Berhasil Dihapus.');
    }
}

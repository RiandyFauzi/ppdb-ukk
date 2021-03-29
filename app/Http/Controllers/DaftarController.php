<?php

namespace App\Http\Controllers;

use App\Daftar;
use App\Http\Requests\DaftarRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('daftar.index', [
            'daftar' => Daftar::all()
          ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('daftar.index', [
            'daftar' => new Daftar(),
          ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DaftarRequest $request)
    {
    
          $attr = $request->all();

          Daftar::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'asal_sekolah' => $request->asal_sekolah,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,    
        ]);
        
          session()->flash('success', 'Post was created');
          return redirect('daftar/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    public function show($nis)
    {
        $daftar = Daftar::where('nis', $nis)->get();
        return view('daftar.show', compact('daftar'));
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $daftar =  Daftar::find($id);
        return view('daftar.edit', compact('daftar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Daftar $daftar)
    {
        $daftar->delete();
        session()->flash('error', "The post was deleted");
        return redirect('daftar/index');
    }
}

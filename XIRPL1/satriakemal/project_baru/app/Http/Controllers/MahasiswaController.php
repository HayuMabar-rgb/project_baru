<?php

namespace App\Http\Controllers;

use App\mahasiswa;
use App\Dosen;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index',compact('mahasiswa','dosen'));
         // $mahasiswa = Mahasiswa::with('dosen')->get();
        // $mahasiswa = DB::table('mahasiswas')->
        // select ('mahasiswas.*','dosens.*'.'from mahasiswas join
        // dosens on dosens.id = mahasiswas.id_dosen');
        // return view('mahasiswa.index',compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dosen = Dosen::all();
        return view('mahasiswa.create',compact('dosen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nama = $request->nama;
        $mahasiswa->nim  = $request->nim;
        $mahasiswa->id_dosen= $request->id_dosen;
        $mahasiswa->save();
        return redirect()->route('mahasiswa.index')
        ->with(['message' => 'Data Mahasiswa berhasil Dibuat']);
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(mahasiswa $mahasiswa)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(mahasiswa $mahasiswa)
    {
        $dosen = Dosen::all();
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit',compact('mahasiswa','dosen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mahasiswa $mahasiswa)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->nama = $request->nama;
        $mahasiswa->nim  = $request->nim;
        $mahasiswa->id_dosen= $request->id_dosen;
        $mahasiswa->save();
        return redirect()->route('mahasiswa.index')->with(['message' => 'Data Mahasiswa berhasil di edit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(mahasiswa $mahasiswa)
    {
        $mahasiswa = Mahasiswa::findOrFail();
        return redirect()->route('mahasiswa.index')->with(['message' => 'hobi Berhasil Dihapus']);

    }
}

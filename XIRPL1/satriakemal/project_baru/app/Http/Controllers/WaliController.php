<?php

namespace App\Http\Controllers;

use App\Wali;
use App\Dosen;
use App\Mahasiswa;
use Illuminate\Http\Request;

class WaliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wali = Wali::all();
        return view('wali.index',compact('mahasiswa','dosen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wali = Wali::all();
        return view('wali.index',compact('dosen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $wali = new Wali();
        $wali->nama = $request->nama;
        $wali->nipd = $request->nipd;
        $wali->id_mahasiswa = $request->id_mahasiswa;
        $wali->save();
        return redirect()->route('wali.index')->with(['message'=>'Data wali berhasil dibuat']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Wali  $wali
     * @return \Illuminate\Http\Response
     */
    public function show(Wali $wali)
    {
        $wali = Wali::findOrFail($id);
        return view('wali.show',compact('wali','mahasiswa'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wali  $wali
     * @return \Illuminate\Http\Response
     */
    public function edit(Wali $wali)
    {
        $mahasiswa = Mahasiswa::all();
        $wali = Wali::findOrFail($id);
        return view('wali.edit',compact('wali','mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wali  $wali
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wali $wali)
    {
        $wali = Wali::findOrFail();
        $wali->nama = $request ->nama;
        $wali->nipd = $request ->nipd;
        $wali->id_mahasiswa= $request ->id_mahasiswa;
        $wali->save();
        return redirect()->route('wali.index')->with(['message'=>'Data Wali Berhasil diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wali  $wali
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wali $wali)
    {
        $wali =   Wali::findOrFail($id);
        return redirect()->route('wali.index')->with(['message'=>'Data Wali Berhasil dihapus']);
    }
}

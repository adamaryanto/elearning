<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


use App\Models\MataKuliah;
use App\Models\ProgramStudi;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mataKuliahs = MataKuliah::all();
        return view('testing.admin.matkul.index',compact('mataKuliahs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodis = ProgramStudi::all();
        return view('testing.admin.matkul.create',compact('prodis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'kode_matkul'=>'required|numeric|digits:3|unique:mata_kuliahs,kode_matkul',
            'nama_matkul'=>'required|string|max:255|unique:mata_kuliahs,nama_matkul',
            'sks'=> 'required|numeric|max:14',
            'prodi_id'  => 'required|exists:program_studis,id',
        ]);
        MataKuliah::create([
            'kode_matkul'=>$validate['kode_matkul'],
            'nama_matkul'=>$validate['nama_matkul'],
            'sks'=>$validate['sks'],
            'prodi_id'=>$validate['prodi_id'],
        ]);
        return redirect()->back()->with('succes','Berhasil Menambahkan Mata Kuliah Baru');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

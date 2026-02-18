<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


use App\Models\Kelas;
use App\Models\ProgramStudi;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelas = Kelas::all();
        return view('testing.admin.kelas.index',compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodis = ProgramStudi::all();
        return view('testing.admin.kelas.create',compact('prodis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_kelas'=> 'string|required|max:50',
            'semester'=>'required|integer|min:1|max:14',
            'prodi_id'  => 'required|exists:program_studis,id',
        ]);
        Kelas::create([
            'nama_kelas'=>$validate['nama_kelas'],
            'semester'=>$validate['semester'],
            'prodi_id'=>$validate['prodi_id'],
        ]);
        return redirect()->back()->with('succes', 'Berhasil Membuat Kelas');
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

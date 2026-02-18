<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswas =Mahasiswa::all();
        return view('testing.admin.mahasiswa.index',compact('mahasiswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('testing.admin.mahasiswa.create',compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name'=> 'required|string|max:100',
            'email'=>'required|email|unique:users,email',
            'nim' => 'required|numeric|unique:mahasiswas,nim',
            'password'=>'required|min:6',
            'kelas_id'  => 'required|exists:kelas,id',
            'no_hp'=>'required|numeric|digits:12',
            'alamat'=>'required|string|max:255'
        ]);
        $user=User::create([
            'name'=>$validate['name'],
            'email'=>$validate['email'],
            'password'=>Hash::make($request->password),
            'role'=> 'Mahasiswa',
            'no_hp'=>$validate['no_hp'],
            'alamat'=>$validate['alamat']
        ]);
        Mahasiswa::create([
            'user_id'=> $user->id,
            'kelas_id'=>$validate['kelas_id'],
            
            'nim'=>$validate['nim'],
            
        ]);
        return redirect()->back()->with('succes', 'Berhasil Menambahkan Mahasiswa');
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

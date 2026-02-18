<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('testing.admin.dosen.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('testing.admin.dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validate = $request->validate([
            'name'=> 'required|string|max:100',
            'email'=>'required|email|unique:users,email',
           
            'nidn' => 'required|numeric|unique:dosens,nidn',
            'password'=>'required|min:6',
            'no_hp'=>'required|numeric|digits:12',
            'kode_dosen' => 'required|unique:dosens,kode_dosen|digits:3',
            'alamat'=>'required|string|max:255'
        ]);
        $user=User::create([
            'name'=>$validate['name'],
            'email'=>$validate['email'],
            'password'=>Hash::make($request->password),
            'role'=> 'Dosen',
            'no_hp'=>$validate['no_hp'],
            'alamat'=>$validate['alamat']
        ]);
        Dosen::create([
            'user_id'=>$user->id,
            'nidn'=>$validate['nidn'],
            'kode_dosen'=>$validate['kode_dosen']

        ]);
        return redirect()->back()->with('succes' ,'Berhasil Menambhakn dosen');
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

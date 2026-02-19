<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use App\Models\AbsensiSession;


use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwals = Jadwal::all();
        return view('testing.mahasiswa.absensi.index',compact('jadwals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mahasiswa_id = Auth::user()->mahasiswa->id;

        $sesion = AbsensiSession::where('jadwal_id', $request->jadwal_id)->whereDate('tanggal',$request->tanggal)->where('jam_buka','<=', now())->where('jam_tutup','>=',now())->first();
        if(!$sesion){
            return redirect()->back()->with('error','Absen Belum DIbuka');
        }
        $sudah_absen = Absensi::where('absensi_sesion_id',$sesion->id)->where('mahasiswa_id',$mahasiswa_id)->exists();

        if($sudah_absen){
            return redirect()->back()->with('error','Kamu Sudah Absen');
        }
        Absensi::create([
            'mahasiswa_id'=>$mahasiswa_id,
            'absensi_sesion_id'=>$sesion->id,
            'status'=>'Hadir',
            'waktu_absen'=>now()
        ]);
        return redirect()->back()->with('succes','Berhasil Absen');
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

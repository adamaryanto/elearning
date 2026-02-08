<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $table = 'absensis';
    protected $fillable = ['absensi_sesion_id','mahasiswa_id','jadwal_id','tanggal','status'];
    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class);
    }
    public function jadwal(){
        return $this->belongsTo(Jadwal::class);
    }
    public function absensisesion(){
        return $this->belongsTo(AbsensiSession::class);
    }

}

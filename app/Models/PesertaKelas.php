<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PesertaKelas extends Model
{
    protected $table = 'peserta_kelas';
    protected $fillable = ['mahasiswa_id','jadwal_id','status'];

    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class);
    }
    public function jadwal(){
        return $this->belongsTo(Jadwal::class);
    }

}

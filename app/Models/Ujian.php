<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    protected $table = 'ujians';
    protected $fillable = ['matkul_id','jenis','waktu_mulai','waktu_selesai'];
    public function matkul(){
        return $this->belongsTo(mata_kuliah::class);
    }
    public function dosen(){
        return $this->belongsTo(Dosen::class);
    }
    public function kelas(){
        return $this->belongsTo(kelas::class);
    }
}

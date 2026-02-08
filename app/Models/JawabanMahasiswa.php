<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JawabanMahasiswa extends Model
{
    protected $table = 'jawaban_mahasiswas';
    protected $fillable = ['ujian_id','soal_id','mahasiswa_id','jawaban'];

    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class);
    }
    public function soal_ujian(){
        return $this->belongsTo(SoalUjian::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SoalUjian extends Model
{
    protected $table = 'soal_ujians';
    protected $fillable = ['ujian_id','pertanyaan','tipe_soal'];

    public function jawaban(){
        return $this->hasMany(JawabanMahasiswa::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UjianMahasiswa extends Model
{
    protected $table = 'ujian_mahasiswas';
    protected $fillable = ['ujian_id','mahasiswa_id','nilai','status'];

    public function ujian(){
        return $this->belongsTo(Ujian::class);
    }
    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class);
    }
}

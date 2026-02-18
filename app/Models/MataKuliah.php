<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    protected $table = 'mata_kuliahs';
    protected $fillable =['kode_matkul','nama_matkul','sks','prodi_id'];
    public function  jadwal(){
        return $this->hasMany(Jadwal::class);
    }
    public function  tugas(){
        return $this->hasMany(Tugas::class);
    }
    public function  ujian(){
        return $this->hasMany(Ujian::class);
    }
    public function diskusi(){
        return $this->hasMany(Diskusi::class);
    }
    public function prodi()
    {
        return $this->belongsTo(ProgramStudi::class, 'prodi_id');
    }

}

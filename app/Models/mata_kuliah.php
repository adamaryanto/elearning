<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mata_kuliah extends Model
{
    protected $table = 'mata_kuliahs';
    protected $fillable =['kode_matkul','nama_matkul','sks'];
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
}

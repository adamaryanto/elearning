<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    protected $fillable = ['nama_kelas','semester','prodi_id'];
    public function mahasiswa(){
        return $this->hasMany(Mahasiswa::class);
    }
    public function prodi(){
        return $this->belongsTo(ProgramStudi::class);
    }
    public function jadwal(){
        return $this->hasMany(Jadwal::class);
    }
    public function ujiam(){
        return $this->hasMany(Ujian::class);
    }
    public function diskusi(){
        return $this->hasMany(Diskusi::class);
    }


}

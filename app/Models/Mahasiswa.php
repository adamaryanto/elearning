<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = ['user_id','kelas_id','prodi_id','nim','semester'];
    public function kelas(){
        return $this->belongsTo(kelas::class);
    }
    public function absensi(){
        return $this->hasMany(Absensi::class);
    }
    public function nilai(){
        return $this->hasMany(Nilai::class);
    }
    public function jawaban(){
        return $this->hasMany(JawabanMahasiswa::class);
    }

    public function pesertakelas(){
        return $this->hasMany(PesertaKelas::class);
    }
    public function jadwal(){
        return $this->belongsToMany(Jadwal::class,'peserta_kelas','mahasiswa_id','jadwal_id')
        ->wherePivot('status','Aktif');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

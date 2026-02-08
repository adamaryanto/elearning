<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwals';
    protected $fillable =['kelas_id','matkul_id','dosen_id','hari','jam_mulai','jam_selesai'];
    public function kelas(){
        return $this->belongsTo(kelas::class);
    }
    public function dosen(){
        return $this->belongsTo(Dosen::class);
    }
    public function matkul(){
        return $this->belongsTo(mata_kuliah::class);
    }
    public function absensi(){
        return $this->hasMany(Absensi::class);
    }
    public function absensisesion(){
        return $this->hasMany(AbsensiSession::class);
    }
    public function pesertakelas(){
        return $this->hasMany(PesertaKelas::class);
    }
        public function mahasiswa(){
        return $this->belongsToMany(Mahasiswa::class,'peserta_kelas','mahasiswa_id','jadwal_id')
        ->wherePivot('status','Aktif');
    }
}

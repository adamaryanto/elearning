<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
   protected $table = 'tugas';
   protected $fillable =['matkul_id','dosen_id','deadline'];

   public function matkul(){
    return $this->belongsTo(mata_kuliah::class);
   }
   public function pengumpulan_tugas(){
    return $this->hasMany(PengumpulanTugas::class);
   }
   
}

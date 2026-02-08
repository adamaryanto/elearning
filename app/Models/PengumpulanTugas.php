<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PengumpulanTugas extends Model
{
   protected $table = 'pengumpulan_tugas';
   protected $fillable = ['tugas_id','mahasiswa_id','link_drive'];

   public function tugas(){
    return $this->belongsTo(Tugas::class);
   }
}

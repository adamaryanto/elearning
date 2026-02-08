<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table = 'nilais';
    protected $fillable = ['mahasiswa_id','matkul_id','nilai_tugas','nilai_uas','nilai_uts'];
    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class);
    }
}

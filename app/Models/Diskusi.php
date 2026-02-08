<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diskusi extends Model
{
    protected $table = 'diskusis';
    protected $fillable = ['matkul_id','user_id','isi_pesan'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function matkul(){
        return $this->belongsTo(mata_kuliah::class);
    }
    public function kelas(){
        return $this->belongsTo(kelas::class);
    }
}

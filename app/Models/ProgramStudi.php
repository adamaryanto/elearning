<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramStudi extends Model
{
    protected $table = 'program_studis';
    protected $fillable =['nama_prodi'];

    public function kelas(){
        return $this->hasMany(kelas::class);
    }
    public function matkul(){
        return $this->hasMany(mata_kuliah::class, 'prodi_id');
    }
}

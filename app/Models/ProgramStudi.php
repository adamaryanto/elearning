<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramStudi extends Model
{
    protected $fillable =['nama_prodi'];

    public function kelas(){
        return $this->hasMany(kelas::class);
    }
}

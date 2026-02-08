<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosens';
    protected $fillable= ['user_id','nidn','nama'];
    public function jadwal(){
        return $this->hasMany(Jadwal::class);
    }
    public function ujian(){
        return $this->hasMany(Ujian::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

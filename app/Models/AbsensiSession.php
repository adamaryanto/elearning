<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AbsensiSession extends Model
{
    protected $table = 'absensi_sessions';
    protected $fillable = ['jadwal_id','tanggal','jam_buka','jam_tutup','status'];

    public function jadwal(){
        return $this->belongsTo(Jadwal::class);
    
    }
    public function absensi(){
        return $this->hasMany(Absensi::class);
    }

}

<?php

namespace App\Models;

use App\Models\Absensi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Istirahat extends Model
{
    use HasFactory;
    protected $table = 'istirahat';

    function Absensi(){
      return $this->belongsTo(Absensi::class, 'id_absen');
    }

  
}

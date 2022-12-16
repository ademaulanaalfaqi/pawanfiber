<?php

namespace App\Models;

use App\Models\DataPegawai;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dinas extends Model
{
    use HasFactory;
    protected $table = 'dinas';

    function DataPegawai()
    {
        return $this->belongsTo(DataPegawai::class, 'id_user');
    }
}

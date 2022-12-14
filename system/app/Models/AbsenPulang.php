<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsenPulang extends Model
{
    use HasFactory;
    protected $table = 'absen_pulang';

    function getLevelStringAttribute(){
		return ($this->level == 1) ? "Masuk" : "Pulang";
	}
}

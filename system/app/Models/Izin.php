<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\DataPegawai;

class Izin extends Model
{
    
    protected $table = 'izin';
	protected $primaryKey = 'id';
	

    function handleUploadFoto()
	{
        // $this->handleDelete();
		if (request()->hasFile('foto')) {
			$foto = request()->file('foto');
			$destination = "images/izin";
			$randomStr = Str::random(5);
			$filename = $this->id . "-" . time() . "-" . $randomStr . "." . $foto->extension();
			$url = $foto->storeAs($destination, $filename);
			$this->foto = "app/" . $url;
			$this->save();
		}
    }

	function DataPegawai()
    {
        return $this->belongsTo(DataPegawai::class, 'id_user');
    }

}

<?php

namespace App\Models;

use App\Models\Izin;
use Illuminate\Support\Str;
use App\Models\ModelAuthenticate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataPegawai extends ModelAuthenticate
{
    use HasFactory;
    protected $table = 'datapegawai';
	protected $primaryKey = 'id';

	function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }

	function getGajiPokokStringAttribute(){
        return "Rp. ".number_format($this->attributes['gaji_pokok']);
    }

	function Izin(){
		return $this->hasMany(Izin::class, 'id_user');
	}

    function handleUploadFoto()
	{
        $this->handleDelete();
		if (request()->hasFile('foto')) {
			$foto = request()->file('foto');
			$destination = "images/datapegawai";
			$randomStr = Str::random(5);
			$filename = $this->id . "-" . time() . "-" . $randomStr . "." . $foto->extension();
			$url = $foto->storeAs($destination, $filename);
			$this->foto = "app/" . $url;
			$this->save();
		}
    }

	function handleDelete()
	{
		$foto = $this->foto;
		if($foto){
			$path = public_path($foto);
			if (file_exists($path)) {
				unlink($path);
			}
			return true;
		}
	}
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FrmContactos extends Model
{
	use SoftDeletes;

    protected $table = "frm_contactos";

    protected $fillable = ['nombres','email','asunto','descripcion','fecha_hora'];

    public function scopeExiste($cadenaSQL, $id)
    {
    	return $cadenaSQL->where('id',$id);
    }
}

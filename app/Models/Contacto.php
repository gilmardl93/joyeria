<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contacto extends Model
{
	use SoftDeletes;

    protected $table = "contactos";

    protected $fillable = ['direccion','telefono1','telefono2','email1','email2'];

    public function scopeExiste($cadenaSQL, $id)
    {
    	return $cadenaSQL->where('id',$id);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Somos extends Model
{
    protected $table = "somos";

    protected $fillable = ['titulo','descripcion','imagen'];

    public function scopeExiste($cadenaSQL, $id)
    {
    	return $cadenaSQL->where('id',$id);
    }
}

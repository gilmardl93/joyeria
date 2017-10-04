<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Marca extends Model
{
    use SoftDeletes;

    protected $table = "marca";

    protected $fillable = ['nombre','imagen'];

    public function scopeExiste($cadenaSQL, $id)
    {
    	return $cadenaSQL->where('id',$id);
    }

    public function getNombreAttribute($value)
    {
    	return trim(Str::upper($value));
    }

    public function setNombreAttribute($value)
    {
        $this->attributes['nombre']  = trim(Str::upper($value));
    }
}

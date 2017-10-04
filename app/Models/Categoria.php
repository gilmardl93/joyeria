<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Categoria extends Model
{
	use SoftDeletes;
	
    protected $table = "categoria";

    protected $fillable = ['nombre','imagen','slug'];

    public function scopeExiste($cadenaSQL, $id)
    {
    	return $cadenaSQL->where('id',$id);
    }

    public function scopeSlug($cadenaSQL, $slug)
    {
        return $cadenaSQL->where('slug',$slug);
    }

    public function setNombreAttribute($value)
    {
        $this->attributes['nombre']  = trim(Str::upper($value));
    }

    public function getNombreAttribute($value)
    {
    	return trim(Str::upper($value));
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }
}

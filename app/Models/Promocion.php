<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Promocion extends Model
{
    use SoftDeletes;

    protected $table = "promocion";

    protected $fillable = ['nombre','descuento','imagen','slug'];

    public function scopeExiste($cadenaSQL, $id)
    {
    	return $cadenaSQL->where('id',$id);
    }

    public function scopeSlug($cadenaSQL, $slug)
    {
        return $cadenaSQL->where('slug',$slug);
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

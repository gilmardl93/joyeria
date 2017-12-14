<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str as Str;

class Noticia extends Model
{
    use SoftDeletes;

    protected $table = "noticia";

    protected $fillable = ['titulo','imagen','slug','descripcion'];

    public function scopeExiste($cadenaSQL, $id)
    {
    	return $cadenaSQL->where('id',$id);
    }

    public function scopeSlug($cadenaSQL, $slug)
    {
        return $cadenaSQL->where('slug',$slug);
    }


    public function setTituloAttribute($value)
    {
        $this->attributes['titulo']  = trim(Str::upper($value));
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug']   = Str::slug($value);
    }

    public function getTituloAttribute($value)
    {
    	return trim(Str::upper($value));
    }
}

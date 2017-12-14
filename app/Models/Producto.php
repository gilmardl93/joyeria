<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Producto extends Model
{
    use SoftDeletes;

    protected $table = "producto";

    protected $fillable = ['slug','nombre','descripcion','imagen1','imagen2','imagen3','imagen4','idpromocion','idmarca','idcategoria','precio'];

    public function categoria()
    {
        return $this->hasOne(Categoria::class,'id','idcategoria');
    }

    public function promocion()
    {
        return  $this->hasOne(Promocion::class,'id','idpromocion');
    }

    public function marca()
    {
        return $this->hasOne(Marca::class,'id','idmarca');
    }

    public function scopeNombre($cadenaSQL, $nombre)
    {
        return $cadenaSQL->where('nombre','like',"%$nombre%");
    }

    public function scopeBCategoria($cadenaSQL, $id)
    {
        return $cadenaSQL->where('idcategoria',$id);
    }

    public function scopeBPromocion($cadenaSQL, $id)
    {
        return $cadenaSQL->where('idpromocion',$id);
    }

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

    public function setNombreAttribute($value)
    {
        $this->attributes['nombre']  = trim(Str::upper($value));
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug']   = Str::slug($value);
    }
}

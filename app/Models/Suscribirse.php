<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Suscribirse extends Model
{
	use SoftDeletes;

    protected $table = "suscribirse";

    protected $fillable = ['email','fecha_hora'];

    public function scopeExiste($cadenaSQL,$id)
    {
    	return $cadenaSQL->where('id',$id);
    }
}

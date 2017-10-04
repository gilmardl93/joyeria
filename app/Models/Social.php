<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $table = "social";

    protected $fillable = ['facebook','twitter'];

    public function scopeExiste($cadenaSQL,$id)
    {
    	return $cadenaSQL->where('id',$id);
    }
}

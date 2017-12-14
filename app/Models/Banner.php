<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends Model
{
	use SoftDeletes;
	
    protected $table = "banner";

    protected $fillable = ['imagen'];

    public function scopeExiste($cadenaSQL, $id)
    {
    	return $cadenaSQL->where('id',$id);
    }
}

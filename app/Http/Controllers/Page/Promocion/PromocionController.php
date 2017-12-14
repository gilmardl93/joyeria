<?php

namespace App\Http\Controllers\Page\Promocion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Promocion;
use App\Models\Categoria;
use App\Models\Social;
use App\Models\Somos;
use App\Models\Producto;
use App\Models\Noticia;

class PromocionController extends Controller
{    
    public function show($slug)
    {
    	$promocion = Promocion::Slug($slug)->get();
    	foreach($promocion as $row):
    		$IdPromocion = $row->id;
    	endforeach;
    	$producto 	= Producto::BCategoria($IdPromocion)->get();
    	$categorias = Categoria::all();
    	$categoria = Categoria::all();
    	$social    = Social::all();
    	$somos    = Somos::all();
        $noticias   = Noticia::all();
    	return view('page.promocion.show', compact(['promocion','categorias','categoria','social','somos','producto','noticias']));
    }
}

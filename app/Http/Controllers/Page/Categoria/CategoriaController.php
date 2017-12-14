<?php

namespace App\Http\Controllers\Page\Categoria;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Social;
use App\Models\Somos;
use App\Models\Promocion;
use App\Models\Producto;
use App\Models\Noticia;

class CategoriaController extends Controller
{
    public function show($slug)
    {
    	$categoria 	= Categoria::Slug($slug)->get();
    	foreach($categoria as $row):
    		$IdCategoria = $row->id;
    	endforeach;
    	$producto 	= Producto::BCategoria($IdCategoria)->get();
    	$categorias = Categoria::all();
    	$social    	= Social::all();
    	$somos    	= Somos::all();
    	$promocion 	= Promocion::all();
        $noticias   = Noticia::all();
    	return view('page.categoria.show', compact(['categorias','categoria','social','somos','promocion','producto','noticias']));
    }
}

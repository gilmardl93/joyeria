<?php

namespace App\Http\Controllers\Page\Noticias;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Social;
use App\Models\Somos;
use App\Models\Contacto;
use App\Models\Promocion;
use App\Models\Producto;
use App\Models\Noticia;

class NoticiasController extends Controller
{
    public function show($slug)
    {
        $contactos  = Contacto::all();
    	$noticia 	= Noticia::Slug($slug)->get();
    	$noticias 	= Noticia::all();
    	$categorias = Categoria::all();
    	$categoria  = Categoria::all();
    	$social    	= Social::all();
    	$somos    	= Somos::all();
    	$promocion 	= Promocion::all();
    	return view('page.noticias.show', compact(['noticia','categorias','categoria','social','somos','promocion','producto','noticias','contactos']));
    }
}

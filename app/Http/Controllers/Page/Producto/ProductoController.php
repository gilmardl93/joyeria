<?php

namespace App\Http\Controllers\Page\Producto;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contacto;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Social;
use App\Models\Somos;

class ProductoController extends Controller
{
    public function show($slug)
    {
        $contactos  = Contacto::all();
    	$producto 	= Producto::Slug($slug)->get();
    	$categoria 	= Categoria::all();
        $social     = Social::all();
        $somos     	= Somos::all();
        $productos 	= Producto::all();
    	return view('page.producto.show', compact(['producto','categoria','social','somos','productos','contactos']));
    }

    public function search(Request $request)
    {
    	$producto 	= Producto::Nombre($request->nombre)->get();
    	$categoria 	= Categoria::all();
        $social     = Social::all();
        $somos     	= Somos::all();
        $productos 	= Producto::all();
        $contactos  = Contacto::all();
    	return view('page.producto.search', compact(['producto','categoria','social','somos','productos','contactos']));
    }
}

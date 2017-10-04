<?php

namespace App\Http\Controllers\Page\Producto;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Social;
use App\Models\Somos;

class ProductoController extends Controller
{
    public function show($slug)
    {
    	$producto = Producto::Slug($slug)->get();
    	$categoria = Categoria::all();
        $social     = Social::all();
        $somos     = Somos::all();
    	return view('page.producto.show', compact(['producto','categoria','social','somos']));
    }
}

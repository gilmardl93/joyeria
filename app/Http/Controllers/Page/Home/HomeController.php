<?php

namespace App\Http\Controllers\Page\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Producto;
use App\Models\Banner;
use App\Models\Contacto;
use App\Models\Categoria;
use App\Models\Promocion;
use App\Models\Somos;
use App\Models\Social;

class HomeController extends Controller
{
    public function index()
    {
    	$productos  = Producto::all();
        $categoria  = Categoria::all();
        $promocion  = Promocion::all();
        $social     = Social::all();
        $somos      = Somos::all();
    	return view('page.home.index', compact(['productos','categoria','promocion','social','somos']));
    }

    public function somos()
    {
        $categoria  = Categoria::all();
        $somos      = Somos::all();
        $social     = Social::all();
        return view('page.home.somos', compact(['categoria','somos','social']));
    }

    public function contactos()
    {
    	$contactos = Contacto::all();
        $categoria = Categoria::all();
        $social     = Social::all();
        $somos      = Somos::all();
    	return view('page.home.contactos', compact(['contactos','categoria','social','somos']));
    }
}

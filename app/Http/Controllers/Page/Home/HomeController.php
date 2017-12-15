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
use App\Models\Noticia;

class HomeController extends Controller
{
    public function index()
    {
        $contactos  = Contacto::all();
    	$productos  = Producto::take(12)->inRandomOrder()->get();
        $categoria  = Categoria::all();
        $promocion  = Promocion::where('nombre','<>','NINGUNO')->get();
        $social     = Social::all();
        $somos      = Somos::all();
        $banner      = Banner::all();
        $listarIndex = '--current';
    	return view('page.home.index', compact(['productos','categoria','promocion','social','somos','banner', 'listarIndex', 'contactos']));
    }

    public function somos()
    {
        $contactos  = Contacto::all();
        $categoria  = Categoria::all();
        $somos      = Somos::all();
        $social     = Social::all();
        $listarSomos = '--current';
        return view('page.home.somos', compact(['categoria','somos','social','listarSomos', 'contactos']));
    }

    public function noticias()
    {
        $contactos  = Contacto::all();
        $categorias = Categoria::all();
        $categoria  = Categoria::all();
        $social     = Social::all();
        $promocion  = Promocion::where('nombre','<>','NINGUNO')->get();
        $somos      = Somos::all();
        $noticias   = Noticia::all();
        $listarNoticias = '--current';
        return view('page.home.noticias', compact(['contactos','categorias','social','somos','promocion','categoria','noticias', 'listarNoticias']));
    }

    public function contactos()
    {
    	$contactos  = Contacto::all();
        $categoria  = Categoria::all();
        $social     = Social::all();
        $somos      = Somos::all();
        $listarContactos = '--current';
    	return view('page.home.contactos', compact(['contactos','categoria','social','somos','listarContactos']));
    }
}

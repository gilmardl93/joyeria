<?php

namespace App\Http\Controllers\Page\Categoria;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Social;
use App\Models\Somos;

class CategoriaController extends Controller
{
    public function show($slug)
    {
    	$categoria = Categoria::Slug($slug)->get();
    	$categorias = Categoria::all();
    	$social    = Social::all();
    	$somos    = Somos::all();
    	return view('page.promocion.show', compact(['categorias','categoria','social','somos']));
    }
}

<?php

namespace App\Http\Controllers\Page\Promocion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Promocion;
use App\Models\Categoria;
use App\Models\Social;
use App\Models\Somos;

class PromocionController extends Controller
{    
    public function show($slug)
    {
    	$promocion = Promocion::Slug($slug)->get();
    	$categoria = Categoria::all();
    	$social    = Social::all();
    	$somos    = Somos::all();
    	return view('page.promocion.show', compact(['promocion','categoria','social','somos']));
    }
}

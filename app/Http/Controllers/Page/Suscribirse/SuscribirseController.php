<?php

namespace App\Http\Controllers\Page\Suscribirse;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Suscribirse;

class SuscribirseController extends Controller
{	
    public function store(Request $request)
    {
    	date_default_timezone_set('America/Lima');
    	Suscribirse::create(['email' => $request->email, 'fecha_hora' => date("Y-m-d H:i:s") ]);
    	return redirect('/')->with('success','Suscripcion realizada');
    }
}

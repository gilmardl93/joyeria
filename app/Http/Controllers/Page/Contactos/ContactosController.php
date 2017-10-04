<?php

namespace App\Http\Controllers\Page\Contactos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Page\Contactos\RegistrarRequest;
use App\Models\FrmContactos;

class ContactosController extends Controller
{
    public function store(RegistrarRequest $request)
    {
    	date_default_timezone_set('America/Lima');
    	FrmContactos::create(['nombres' => $request->nombres,'email' => $request->email, 'asunto' => $request->asunto, 'descripcion' => $request->mensaje, 'fecha_hora' => date("Y-m-d H:i:s") ]);
    	return redirect('contactos')->with('success','Mensaje enviado.');
    }
}

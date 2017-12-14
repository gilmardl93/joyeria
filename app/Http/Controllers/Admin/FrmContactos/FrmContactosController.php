<?php

namespace App\Http\Controllers\Admin\FrmContactos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FrmContactos;

class FrmContactosController extends Controller
{
    public function index()
    {
    	$contactos = FrmContactos::orderBy('fecha_hora', 'desc')->paginate(10);
    	return view('admin.frmcontactos.index', compact(['contactos']));
    }

    public function delete($id)
    {
    	$contacto = FrmContactos::find($id);
    	$contacto->delete();

    	return back()->with('danger', 'Contacto eliminado');
    }
}

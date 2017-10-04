<?php

namespace App\Http\Controllers\Admin\Contactos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Contactos\RegistrarRequest;
use App\Models\Contacto;

class ContactosController extends Controller
{
    public function index()
    {
    	$contactos = Contacto::paginate(10);
    	return view('admin.contactos.index', compact('contactos'));
    }

    public function create()
    {
    	return view('admin.contactos.create');
    }

    public function store(RegistrarRequest $request)
    {
        date_default_timezone_set('America/Lima');
    	Contacto::create(['direccion' => $request->direccion, 'telefono1' => $request->telefono1, 'telefono2' => $request->telefono2, 'email1' => $request->email1, 'email2' => $request->email2 ]);
    	return redirect('admin/contactos')->with('success','Se registro nuevo contacto');
    }

    public function edit($id)
    {
    	$contacto = Contacto::Existe($id)->get();
    	return view('admin.contactos.edit', compact('contacto'));
    }

    public function update(RegistrarRequest $request)
    {
        date_default_timezone_set('America/Lima');
    	Contacto::Existe($request->id)->update(['direccion' => $request->direccion, 'telefono1' => $request->telefono1, 'telefono2' => $request->telefono2, 'email1' => $request->email1, 'email2' => $request->email2 ]);
    	return redirect('admin/contactos')->with('success','Se actualizo contacto');
    }

    public function delete($id)
    {
        date_default_timezone_set('America/Lima');
    	Contacto::Existe($id)->delete();
    	return redirect('admin/contactos')->with('danger','Se elimino contacto');
    }
}

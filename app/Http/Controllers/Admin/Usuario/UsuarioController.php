<?php

namespace App\Http\Controllers\Admin\Usuario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Usuario\RegistrarRequest;
use App\User;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = User::paginate(10);
    	return view('admin.usuario.index', compact('usuarios'));
    }

    public function create()
    {
    	return view('admin.usuario.create');
    }

    public function store(RegistrarRequest $request)
    {
        date_default_timezone_set('America/Lima');
        User::create(['username' => $request->username, 'password' => $request->password, 'nombres' => $request->nombres, 'paterno' => $request->paterno, 'materno' => $request->materno ]);
        return redirect('usuario')->with('success','Se registro nueva usuario');         	
    }

    public function edit($id)
    {
    	$usuario = User::Existe($id)->get();
    	return view('admin.usuario.edit', compact('usuario'));
    }

    public function update(Request $request)
    {
        date_default_timezone_set('America/Lima');
        if($request->has('password') == false) 
        {
            User::Existe($request->id)->update(['username' => $request->username, 'password' => $request->password, 'nombres' => $request->nombres, 'paterno' => $request->paterno, 'materno' => $request->materno ]);
            return redirect('usuario')->with('success','Se actualizo usuario');
        }else 
        {            
            User::Existe($request->id)->update(['username' => $request->username, 'nombres' => $request->nombres, 'paterno' => $request->paterno, 'materno' => $request->materno ]);
            return redirect('usuario')->with('success','Se actualizo usuario');
        }
    }

    public function delete($id)
    {
        date_default_timezone_set('America/Lima');
    	User::Existe($id)->delete();
    	return redirect('usuario')->with('danger','Se elimino usuario');
    }
}

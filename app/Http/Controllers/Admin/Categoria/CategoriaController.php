<?php

namespace App\Http\Controllers\Admin\Categoria;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Categoria\RegistrarRequest;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
    	$categorias = Categoria::paginate(10);
    	return view('admin.categoria.index', compact('categorias'));
    }

    public function create()
    {
    	return view('admin.categoria.create');
    }

    public function store(RegistrarRequest $request)
    {
        date_default_timezone_set('America/Lima');
        if($request->hasFile('imagen'))
        {
            $nombre = $request->file('imagen')->store('categoria','public');
        }
    	Categoria::create(['slug' => $request->nombre,'nombre' => $request->nombre, 'imagen' => $nombre ]);
    	return redirect('categorias')->with('success','Se registro nueva categoria');
    }

    public function edit($id)
    {
    	$categoria = Categoria::Existe($id)->get();
    	return view('admin.categoria.edit', compact('categoria'));
    }

    public function update(RegistrarRequest $request)
    {
        date_default_timezone_set('America/Lima');
        if($request->hasFile('imagen'))
        {
            $nombre = $request->file('imagen')->store('categoria','public');
        }else 
        {
            $nombre = $request->img;
        }
    	Categoria::Existe($request->id)->update(['slug' => $request->nombre,'nombre' => $request->nombre, 'imagen' => $nombre ]);
    	return redirect('categorias')->with('success','Se actualizo la categoria');
    }

    public function delete($id)
    {
        date_default_timezone_set('America/Lima');
    	Categoria::Existe($id)->delete();
    	return redirect('categorias')->with('danger','Se elimino la categoria');
    }
}

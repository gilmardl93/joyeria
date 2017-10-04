<?php

namespace App\Http\Controllers\Admin\Marca;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Marca\RegistrarRequest;
use App\Models\Marca;

class MarcaController extends Controller
{
    public function index()
    {
        $marcas = Marca::paginate(10);
    	return view('admin.marca.index', compact('marcas'));
    }

    public function create()
    {
    	return view('admin.marca.create');
    }

    public function store(RegistrarRequest $request)
    {
        date_default_timezone_set('America/Lima');
        if($request->hasFile('imagen'))
        {
            $nombre = $request->file('imagen')->store('marca','public');
            Marca::create(['nombre' => $request->nombre, 'imagen' => $nombre ]);
            return redirect('marca')->with('success','Se registro nueva marca');
        }          	
    }

    public function edit($id)
    {
    	$marca = Marca::Existe($id)->get();
    	return view('admin.marca.edit', compact('marca'));
    }

    public function update(Request $request)
    {
        date_default_timezone_set('America/Lima');
        if($request->hasFile('imagen'))
        {
            $nombre = $request->file('imagen')->store('marca','public');
            Marca::Existe($request->id)->update(['nombre' => $request->nombre, 'imagen' => $nombre ]);
            return redirect('marca')->with('success','Se actualizo marca');
        }else 
        {            
            Marca::Existe($request->id)->update(['nombre' => $request->nombre ]);
            return redirect('marca')->with('success','Se actualizo marca');
        }
    }

    public function delete($id)
    {
        date_default_timezone_set('America/Lima');
    	Marca::Existe($id)->delete();
    	return redirect('marca')->with('danger','Se elimino marca');
    }
}

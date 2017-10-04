<?php

namespace App\Http\Controllers\Admin\Somos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Somos;

class SomosController extends Controller
{
    public function index()
    {
    	$somos = Somos::paginate(10);
    	return view('admin.somos.index', compact('somos'));
    }

    public function edit($id)
    {
    	$somos = Somos::Existe($id)->get();
    	return view('admin.somos.edit', compact('somos'));
    }

    public function update(Request $request)
    {
        date_default_timezone_set('America/Lima');
        if($request->hasFile('imagen'))
        {
            $nombre = $request->file('imagen')->store('somos','public');
        }else 
        {
            $nombre = $request->img;
        }
    	Somos::Existe($request->id)->update(['titulo' => $request->titulo, 'descripcion' => $request->descripcion, 'imagen' => $nombre ]);
    	return redirect('somos')->with('success','Se actualizo Quienes Somos');
    }
}

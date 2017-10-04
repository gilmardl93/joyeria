<?php

namespace App\Http\Controllers\Admin\Promocion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Promocion\RegistrarRequest;
use App\Models\Promocion;

class PromocionController extends Controller
{
    public function index()
    {
    	$promocion = promocion::paginate(10);
    	return view('admin.promocion.index', compact('promocion'));
    }

    public function create()
    {
    	return view('admin.promocion.create');
    }

    public function store(RegistrarRequest $request)
    {
        date_default_timezone_set('America/Lima');
        if($request->hasFile('imagen'))
        {
            $nombre = $request->file('imagen')->store('promociones','public');
        }
    	promocion::create(['slug' => $request->nombre ,'nombre' => $request->nombre, 'descuento' => $request->descuento, 'imagen' => $nombre ]);
    	return redirect('promocion')->with('success','Se registro nueva promocion');
    }

    public function edit($id)
    {
    	$promocion = promocion::Existe($id)->get();
    	return view('admin.promocion.edit', compact('promocion'));
    }

    public function update(RegistrarRequest $request)
    {
        date_default_timezone_set('America/Lima');
        if($request->hasFile('imagen'))
        {
            $nombre = $request->file('imagen')->store('promociones','public');
        }else 
        {
            $nombre = $request->img;
        }
    	promocion::Existe($request->id)->update(['slug' => $request->nombre ,'nombre' => $request->nombre, 'descuento' => $request->descuento, 'imagen' => $nombre ]);
    	return redirect('promocion')->with('success','Se actualizo la promocion');
    }

    public function delete($id)
    {
        date_default_timezone_set('America/Lima');
    	promocion::Existe($id)->delete();
    	return redirect('promocion')->with('danger','Se elimino la promocion');
    }
}

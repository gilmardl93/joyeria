<?php

namespace App\Http\Controllers\Admin\Producto;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Producto\RegistrarRequest;
use Illuminate\Support\Str;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Promocion;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::paginate(10);
    	return view('admin.producto.index', compact('productos'));
    }

    public function create()
    {
    	$categoria  = Categoria::pluck('nombre','id');
    	$marca  = Marca::pluck('nombre','id');
    	$promocion  = Promocion::pluck('nombre','id');
    	return view('admin.producto.create', compact(['categoria', 'marca', 'promocion']));
    }

    public function store(RegistrarRequest $request)
    {
        date_default_timezone_set('America/Lima');
        if($request->hasFile('imagen1'))
        {
            $imagen1 = $request->file('imagen1')->store('producto','public');
        }else 
        {
        	$imagen1 = "";
        }    

        if($request->hasFile('imagen2'))
        {
            $imagen2 = $request->file('imagen2')->store('producto','public');
        }else 
        {
        	$imagen2 = "";
        }    

        if($request->hasFile('imagen3'))
        {
            $imagen3 = $request->file('imagen3')->store('producto','public');
        }else 
        {
        	$imagen3 = "";
        }    

        if($request->hasFile('imagen4'))
        {
            $imagen4 = $request->file('imagen4')->store('producto','public');
        }else 
        {
        	$imagen4 = "";
        }    

        Producto::create(['slug' => $request->nombre, 'nombre' => $request->nombre, 'descripcion' => $request->descripcion, 'imagen1' => $imagen1, 'imagen2' => $imagen2, 'imagen3' => $imagen3, 'imagen4' => $imagen4, 'idcategoria' => $request->idcategoria, 'idmarca' => $request->idmarca, 'idpromocion' => $request->idpromocion,'precio' => $request->precio]);
       	return redirect('producto')->with('success','Producto registrado');
    } 

    public function edit($id)
    {
    	$producto = producto::Existe($id)->get();
    	$categoria  = Categoria::pluck('nombre','id');
    	$marca  = Categoria::pluck('nombre','id');
    	$promocion  = Categoria::pluck('nombre','id');
    	return view('admin.producto.edit', compact(['producto', 'categoria', 'marca', 'promocion']));
    }

    public function update(Request $request)
    {
        date_default_timezone_set('America/Lima');
        if($request->hasFile('imagen1'))
        {
            $imagen1 = $request->file('imagen1')->store('producto','public');
        }else 
        {
        	$imagen1 = $request->img1;
        }    

        if($request->hasFile('imagen2'))
        {
            $imagen2 = $request->file('imagen2')->store('producto','public');
        }else 
        {
        	$imagen2 = $request->img2;
        }    

        if($request->hasFile('imagen3'))
        {
            $imagen3 = $request->file('imagen3')->store('producto','public');
        }else 
        {
        	$imagen3 = $request->img3;
        }    

        if($request->hasFile('imagen4'))
        {
            $imagen4 = $request->file('imagen4')->store('producto','public');
        }else 
        {
        	$imagen4 = $request->img4;
        }    

        Producto::Existe($request->id)->update(['slug' => Str::slug($request->nombre), 'nombre' => $request->nombre, 'descripcion' => $request->descripcion, 'imagen1' => $imagen1, 'imagen2' => $imagen2, 'imagen3' => $imagen3, 'imagen4' => $imagen4, 'idcategoria' => $request->idcategoria, 'idmarca' => $request->idmarca, 'idpromocion' => $request->idpromocion, 'precio' => $request->precio]);
       	return redirect('producto')->with('success','Producto registrado');
    }

    public function delete($id)
    {
        date_default_timezone_set('America/Lima');
    	Producto::Existe($id)->delete();
    	return redirect('producto')->with('danger','Se elimino producto');
    }
}

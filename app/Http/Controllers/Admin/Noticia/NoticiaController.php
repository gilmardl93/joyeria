<?php

namespace App\Http\Controllers\Admin\Noticia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Noticia\RegistrarRequest;
use App\Models\Noticia;
use Illuminate\Support\Str;

class NoticiaController extends Controller
{
    public function index()
    {
        $noticias = Noticia::paginate(10);
    	return view('admin.noticia.index', compact('noticias'));
    }

    public function create()
    {
    	return view('admin.noticia.create');
    }

    public function store(RegistrarRequest $request)
    {
        date_default_timezone_set('America/Lima');
        if($request->hasFile('imagen'))
        {
            $nombre = $request->file('imagen')->store('noticia','public');
            Noticia::create(['slug' => $request->titulo ,'titulo' => $request->titulo, 'descripcion' => $request->descripcion,'imagen' => $nombre ]);
            return redirect('noticia')->with('success','Se registro nueva noticia');
        }          	
    }

    public function edit($id)
    {
    	$noticia = Noticia::Existe($id)->get();
    	return view('admin.noticia.edit', compact('noticia'));
    }

    public function update(Request $request)
    {
        date_default_timezone_set('America/Lima');
        if($request->hasFile('imagen'))
        {
            $nombre = $request->file('imagen')->store('noticia','public');
            Noticia::Existe($request->id)->update(['slug' => $request->titulo,'titulo' => $request->titulo,'descripcion' => $request->descripcion, 'imagen' => $nombre ]);
            return redirect('noticia')->with('success','Se actualizo noticia');
        }else 
        {            
            Noticia::Existe($request->id)->update(['slug' => $request->titulo,'titulo' => $request->titulo,'descripcion' => $request->descripcion]);
            return redirect('noticia')->with('success','Se actualizo noticia');
        }
    }

    public function delete($id)
    {
        date_default_timezone_set('America/Lima');
    	Noticia::Existe($id)->delete();
    	return redirect('noticia')->with('danger','Se elimino noticia');
    }
}

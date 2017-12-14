<?php

namespace App\Http\Controllers\Admin\Banner;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Banner\RegistrarRequest;
use App\Models\Banner;

class BannerController extends Controller
{
    public function index()
    {
    	$banner = Banner::paginate(10);
    	return view('admin.banner.index', compact('banner'));
    }

    public function create()
    {
    	return view('admin.banner.create');
    }

    public function store(RegistrarRequest $request)
    {
        date_default_timezone_set('America/Lima');
        if($request->hasFile('imagen'))
        {
            $nombre = $request->file('imagen')->store('banner','public');
        }
    	Banner::create(['imagen' => $nombre ]);
    	return redirect('banner')->with('success','Se registro nuevo banner');
    }

    public function edit($id)
    {
    	$banner = Banner::Existe($id)->get();
    	return view('admin.banner.edit', compact('banner'));
    }

    public function update(RegistrarRequest $request)
    {
        date_default_timezone_set('America/Lima');
        if($request->hasFile('imagen'))
        {
            $nombre = $request->file('imagen')->store('banner','public');
        }else 
        {
            $nombre = $request->img;
        }
    	Banner::Existe($request->id)->update(['imagen' => $nombre ]);
    	return redirect('banner')->with('success','Se actualizo el banner');
    }

    public function delete($id)
    {
        date_default_timezone_set('America/Lima');
    	Banner::Existe($id)->delete();
    	return redirect('banner')->with('danger','Se elimino el banner');
    }
}

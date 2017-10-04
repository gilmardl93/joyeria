<?php

namespace App\Http\Controllers\Admin\Suscripcion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Suscribirse;
class SuscripcionController extends Controller
{
	public function index()
	{
		$suscripcion = Suscribirse::paginate(10);
		return view('admin.suscripcion.index', compact('suscripcion'));
	}

	public function delete($id)
	{
		Suscribirse::Existe($id)->delete();
		return redirect()->route('admin.suscripcion.index')->with('danger','Suscripcion eliminada');
	}
}

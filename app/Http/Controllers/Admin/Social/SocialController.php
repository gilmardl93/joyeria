<?php

namespace App\Http\Controllers\Admin\Social;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Social;

class SocialController extends Controller
{
    public function index()
    {
    	$social = Social::all();
    	return view('admin.social.index', compact('social'));
    }

    public function update(Request $request)
    {
    	Social::Existe($request->id)->update(['facebook' => $request->facebook, 'twitter' => $request->twitter]);
    	return redirect()->route('admin.social.index')->with('success','Se actualizo las redes sociales');
    }
}

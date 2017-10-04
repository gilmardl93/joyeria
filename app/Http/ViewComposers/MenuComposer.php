<?php

namespace App\Http\ViewComposers; 

use Illuminate\View\View;

/**
* Menu Categoria Composer
*/
class MenuComposer
{
	public function compose(View $view)
	{
		$view->with('menu', random_int(1, 2));
	}
}
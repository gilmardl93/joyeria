<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['namespace' => 'Admin', 'middleware' => 'auth'], function(){

	Route::group(['namespace' => 'Home'], function(){
		Route::get('admin','HomeController@index')->name('admin.home.index');
	});

	Route::group(['namespace' => 'Categoria'], function(){
		Route::get('categorias','CategoriaController@index')->name('admin.categoria.index');	
		Route::get('categoria-nuevo','CategoriaController@create')->name('admin.categoria.create');
		Route::get('categoria-editar/{id}','CategoriaController@edit')->name('admin.categoria.edit');	
		Route::get('categoria-eliminar/{id}','CategoriaController@delete')->name('admin.categoria.delete');	
		Route::post('categoria-registrar','CategoriaController@store')->name('admin.categoria.store');
		Route::post('categoria-actualizar','CategoriaController@update')->name('admin.categoria.update');
	});

	Route::group(['namespace' => 'Promocion'], function(){
		Route::get('promocion','PromocionController@index')->name('admin.promocion.index');	
		Route::get('promocion-nuevo','PromocionController@create')->name('admin.promocion.create');
		Route::get('promocion-editar/{id}','PromocionController@edit')->name('admin.promocion.edit');	
		Route::get('promocion-eliminar/{id}','PromocionController@delete')->name('admin.promocion.delete');	
		Route::post('promocion-registrar','PromocionController@store')->name('admin.promocion.store');
		Route::post('promocion-actualizar','PromocionController@update')->name('admin.promocion.update');
	});

	Route::group(['namespace' => 'Marca'], function(){
		Route::get('marca','MarcaController@index')->name('admin.marca.index');	
		Route::get('marca-nuevo','MarcaController@create')->name('admin.marca.create');
		Route::get('marca-editar/{id}','MarcaController@edit')->name('admin.marca.edit');	
		Route::get('marca-eliminar/{id}','MarcaController@delete')->name('admin.marca.delete');	
		Route::post('marca-registrar','MarcaController@store')->name('admin.marca.store');
		Route::post('marca-actualizar','MarcaController@update')->name('admin.marca.update');
	});

	Route::group(['namespace' => 'Noticia'], function(){
		Route::get('noticia','NoticiaController@index')->name('admin.noticia.index');	
		Route::get('noticia-nuevo','NoticiaController@create')->name('admin.noticia.create');
		Route::get('noticia-editar/{id}','NoticiaController@edit')->name('admin.noticia.edit');	
		Route::get('noticia-eliminar/{id}','NoticiaController@delete')->name('admin.noticia.delete');	
		Route::post('noticia-registrar','NoticiaController@store')->name('admin.noticia.store');
		Route::post('noticia-actualizar','NoticiaController@update')->name('admin.noticia.update');
	});

	Route::group(['namespace' => 'Usuario'], function(){
		Route::get('usuario','UsuarioController@index')->name('admin.usuario.index');	
		Route::get('usuario-nuevo','UsuarioController@create')->name('admin.usuario.create');
		Route::get('usuario-editar/{id}','UsuarioController@edit')->name('admin.usuario.edit');	
		Route::get('usuario-eliminar/{id}','UsuarioController@delete')->name('admin.usuario.delete');	
		Route::post('usuario-registrar','UsuarioController@store')->name('admin.usuario.store');
		Route::post('usuario-actualizar','UsuarioController@update')->name('admin.usuario.update');
	});

	Route::group(['namespace' => 'Producto'], function(){
		Route::get('producto','ProductoController@index')->name('admin.producto.index');	
		Route::get('producto-nuevo','ProductoController@create')->name('admin.producto.create');
		Route::get('producto-editar/{id}','ProductoController@edit')->name('admin.producto.edit');	
		Route::get('producto-eliminar/{id}','ProductoController@delete')->name('admin.producto.delete');	
		Route::post('producto-registrar','ProductoController@store')->name('admin.producto.store');
		Route::post('producto-actualizar','ProductoController@update')->name('admin.producto.update');
	});

	Route::group(['namespace' => 'Somos'], function(){
		Route::get('somos','SomosController@index')->name('admin.somos.index');	
		Route::get('somos-editar/{id}','SomosController@edit')->name('admin.somos.edit');	
		Route::post('somos-actualizar','SomosController@update')->name('admin.somos.update');
	});

	Route::group(['namespace' => 'Contactos'], function(){
		Route::get('admin/contactos','ContactosController@index')->name('admin.contactos.index');	
		Route::get('contactos-nuevo','ContactosController@create')->name('admin.contactos.create');
		Route::get('contactos-editar/{id}','ContactosController@edit')->name('admin.contactos.edit');	
		Route::get('contactos-eliminar/{id}','ContactosController@delete')->name('admin.contactos.delete');
		Route::post('contactos-registrar','ContactosController@store')->name('admin.contactos.store');
		Route::post('contactos-actualizar','ContactosController@update')->name('admin.contactos.update');
	});

	Route::group(['namespace' => 'Suscripcion'], function(){
		Route::get('suscripcion','SuscripcionController@index')->name('admin.suscripcion.index');	
		Route::get('suscripcion-eliminar/{id}','SuscripcionController@delete')->name('admin.suscripcion.delete');
	});

	Route::group(['namespace' => 'Social'], function(){
		Route::get('social','SocialController@index')->name('admin.social.index');	
		Route::post('social-actualizar','SocialController@update')->name('admin.social.update');
	});

});

Route::group(['namespace' => 'Page'], function(){
	Route::group(['namespace' => 'Home'], function(){
		Route::get('/','HomeController@index')->name('page.home.index');
		Route::get('contactos','HomeController@contactos')->name('page.home.contactos');
		Route::get('quienes-somos','HomeController@somos')->name('page.home.somos');
	});

	Route::group(['namespace' => 'Contactos'], function(){
		Route::post('contactos-registrar-frm','ContactosController@store')->name('page.contactos.store');
	});

	Route::group(['namespace' => 'Suscribirse'], function(){
		Route::post('suscribirse-registrar','SuscribirseController@store')->name('page.suscribirse.store');
	});

	Route::group(['namespace' => 'Categoria'], function(){
		Route::get('ver-categoria/{slug}','CategoriaController@show')->name('page.categoria.show');
	});

	Route::group(['namespace' => 'Promocion'], function(){
		Route::get('ver-promocion/{slug}','PromocionController@show')->name('page.promocion.show');
	});

	Route::group(['namespace' => 'Producto'], function(){
		Route::get('ver-producto/{slug}','ProductoController@show')->name('page.producto.show');
		Route::post('buscar-producto','ProductoController@search')->name('page.producto.search');
	});
});

Route::group(['namespace' => 'Authenticate'], function(){
	Route::group(['namespace' => 'Auth'], function(){
		Route::post('iniciar-sesion','AuthController@authenticate')->name('auth.auth.authenticate');
		Route::get('cerrar-sesion','AuthController@logout')->name('auth.auth.logout');
		Route::get('login','AuthController@login')->name('login');
	});
});

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
@extends('layouts.admin')

@section('titulo-pagina')
NOTICIA
@stop

@section('titulo')
NOTICIA
@stop

@section('content')
	@if (session('success'))
    <div class="alert alert-success alert-fill alert-close alert-dismissible fade show" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		{!! session('success') !!}			
	</div>
	@endif

	@if (session('danger'))
    <div class="alert alert-danger alert-fill alert-close alert-dismissible fade show" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		{!! session('danger') !!}			
	</div>
	@endif

	<section class="card card-blue mb-3">
		<header class="card-header">
			NOTICIA 
			<a href="{!! route('admin.noticia.create') !!}" class="btn btn-inline btn-primary-outline">NUEVO</a>
		</header>
		<div class="card-block">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>TITULO</th>
						<th>DESCRIPCION</th>
						<th>IMAGEN</th>
						<th>ACCION</th>
					</tr>
				</thead>
				<tbody>
					@foreach($noticias as $row)
					<tr>
						<td>{!! $row->titulo !!}</td>
						<td>{!! $row->descripcion !!}</td>
						<td><img src="{!! asset('storage/'.$row->imagen) !!}" width="100" height="50"></td>
						<td>
							<a href="{!! route('admin.noticia.edit',$row->id) !!}", class="btn btn-inline btn-primary-outline">EDITAR</a>
							<a href="{!! route('admin.noticia.delete',$row->id ) !!}", class="btn btn-inline btn-danger-outline">ELIMINAR</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{!! $noticias->links() !!}
		</div>
	</section>
@stop

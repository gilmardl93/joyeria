@extends('layouts.admin')

@section('titulo-pagina')
USUARIO
@stop

@section('titulo')
USUARIO
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
			USUARIO 
			<a href="{!! route('admin.usuario.create') !!}" class="btn btn-inline btn-primary-outline">NUEVO</a>
		</header>
		<div class="card-block">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>DATOS</th>
						<th>USUARIO</th>
						<th>ACCION</th>
					</tr>
				</thead>
				<tbody>
					@foreach($usuarios as $row)
					<tr>
						<td>{!! $row->datos !!}</td>
						<td>{!! $row->username !!}</td>
						<td>
							<a href="{!! route('admin.usuario.edit',$row->id) !!}", class="btn btn-inline btn-primary-outline">EDITAR</a>
							<a href="{!! route('admin.usuario.delete',$row->id ) !!}", class="btn btn-inline btn-danger-outline">ELIMINAR</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{!! $usuarios->links() !!}
		</div>
	</section>
@stop

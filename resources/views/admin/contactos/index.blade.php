@extends('layouts.admin')

@section('titulo-pagina')
CONTACTOS
@stop

@section('titulo')
CONTACTOS
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
			CONTACTOS 
			<a href="{!! route('admin.contactos.create') !!}" class="btn btn-inline btn-primary-outline">NUEVO</a>
		</header>
		<div class="card-block">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>DIRECCION</th>
						<th>TELEFONO 1</th>
						<th>TELEFONO 2</th>
						<th>EMAIL 1</th>
						<th>EMAIL 2</th>
						<th>ACCION</th>
					</tr>
				</thead>
				<tbody>
					@foreach($contactos as $row)
					<tr>
						<td>{!! $row->direccion !!}</td>
						<td>{!! $row->telefono1 !!}</td>
						<td>{!! $row->telefono2 !!}</td>
						<td>{!! $row->email1 !!}</td>
						<td>{!! $row->email2 !!}</td>
						<td>
							<a href="{!! route('admin.contactos.edit',$row->id) !!}", class="btn btn-inline btn-primary-outline">EDITAR</a>
							<a href="{!! route('admin.contactos.delete',$row->id ) !!}", class="btn btn-inline btn-danger-outline">ELIMINAR</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{!! $contactos->links() !!}
		</div>
	</section>
@stop

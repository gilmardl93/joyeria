@extends('layouts.admin')

@section('titulo-pagina')
PROMOCION
@stop

@section('titulo')
PROMOCION
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
			PROMOCION 
			<a href="{!! route('admin.promocion.create') !!}" class="btn btn-inline btn-primary-outline">NUEVO</a>
		</header>
		<div class="card-block">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>NOMBRE</th>
						<th>DESCUENTO</th>
						<th>ACCION</th>
					</tr>
				</thead>
				<tbody>
					@foreach($promocion as $row)
					<tr>
						<td>{!! $row->nombre !!}</td>
						<td>{!! $row->descuento !!}</td>
						@if($row->id != 1)
						<td>
							<a href="{!! route('admin.promocion.edit',$row->id) !!}", class="btn btn-inline btn-primary-outline">EDITAR</a>
							<a href="{!! route('admin.promocion.delete',$row->id ) !!}", class="btn btn-inline btn-danger-outline">ELIMINAR</a>
						</td>
						@endif
					</tr>
					@endforeach
				</tbody>
			</table>
			{!! $promocion->links() !!}
		</div>
	</section>
@stop

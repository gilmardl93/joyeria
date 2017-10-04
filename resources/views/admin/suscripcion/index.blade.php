@extends('layouts.admin')

@section('titulo-pagina')
SUSCRIPCIONES
@stop

@section('titulo')
SUSCRIPCIONES
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
			SUSCRIPCIONES 
		</header>
		<div class="card-block">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>EMAIL</th>
						<th>FECHA - HORA</th>
						<th>ACCION</th>
					</tr>
				</thead>
				<tbody>
					@foreach($suscripcion as $row)
					<tr>
						<td>{!! $row->email !!}</td>
						<td>{!! $row->fecha_hora !!}</td>
						<td>
							<a href="{!! route('admin.suscripcion.delete',$row->id ) !!}", class="btn btn-inline btn-danger-outline">ELIMINAR</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{!! $suscripcion->links() !!}
		</div>
	</section>
@stop

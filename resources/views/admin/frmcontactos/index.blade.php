@extends('layouts.admin')

@section('titulo-pagina')
LISTA DE CONTACTOS
@stop

@section('titulo')
LISTA DE CONTACTOS
@stop

@section('content')

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
			LISTA DE CONTACTOS 
		</header>
		<div class="card-block">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>DATOS</th>
						<th>EMAIL</th>
						<th>ASUNTO</th>
						<th>DESCRIPCION</th>
						<th>FECHA - HORA</th>
						<th>ACCION</th>
					</tr>
				</thead>
				<tbody>
					@foreach($contactos as $row)
					<tr>
						<td>{!! $row->nombres !!}</td>
						<td>{!! $row->email !!}</td>
						<td>{!! $row->asunto !!}</td>
						<td>{!! $row->descripcion !!}</td>
						<td>{!! $row->fecha_hora !!}</td>
						<td>
							<a href="{!! route('admin.frmcontactos.delete',$row->id ) !!}", class="btn btn-inline btn-danger-outline">ELIMINAR</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{!! $contactos->links() !!}
		</div>
	</section>
@stop

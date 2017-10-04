@extends('layouts.admin')

@section('titulo-pagina')
QUIENES SOMOS
@stop

@section('titulo')
QUIENES SOMOS
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
			QUIENES SOMOS 
		</header>
		<div class="card-block">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>TITULO</th>
						<th>DESCRIPCION</th>
						<th>ACCION</th>
					</tr>
				</thead>
				<tbody>
					@foreach($somos as $row)
					<tr>
						<td>{!! $row->titulo !!}</td>
						<td>{!! $row->descripcion !!}</td>
						<td>
							<a href="{!! route('admin.somos.edit',$row->id) !!}", class="btn btn-inline btn-primary-outline">EDITAR</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{!! $somos->links() !!}
		</div>
	</section>
@stop

@extends('layouts.admin')

@section('titulo-pagina')
BANNER
@stop

@section('titulo')
BANNER
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
			BANNER 
			<a href="{!! route('admin.banner.create') !!}" class="btn btn-inline btn-primary-outline">NUEVO</a>
		</header>
		<div class="card-block">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>NOMBRE</th>
						<th>ACCION</th>
					</tr>
				</thead>
				<tbody>
					@foreach($banner as $row)
					<tr>
						<td><img src="{!! asset('storage/'.$row->imagen) !!}" width="200" height="80"></td>
						<td>
							<a href="{!! route('admin.banner.edit',$row->id) !!}", class="btn btn-inline btn-primary-outline">EDITAR</a>
							<a href="{!! route('admin.banner.delete',$row->id ) !!}", class="btn btn-inline btn-danger-outline">ELIMINAR</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{!! $banner->links() !!}
		</div>
	</section>
@stop

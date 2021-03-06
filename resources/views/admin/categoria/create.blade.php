@extends('layouts.admin')

@section('titulo-pagina')
NUEVA CATEGORIA
@stop

@section('titulo')
NUEVA CATEGORIA
@stop

@section('content')
	<section class="card card-blue mb-3">
		<header class="card-header">
			<a href="{!! route('admin.categoria.index') !!}" class="btn btn-inline btn-danger-outline">ATRAS</a>
		</header>
		<div class="card-block">
			{!! Form::open(['method' => 'POST', 'route' => 'admin.categoria.store', 'files' => true]) !!}
			{!! Field::text('nombre') !!}
			{!! Field::file('imagen') !!}
			{!! Form::submit('REGISTRAR', ['class' => 'btn btn-rounded btn-inline btn-primary-outline']) !!}
			{!! Form::close() !!}
		</div>
	</section>
@stop
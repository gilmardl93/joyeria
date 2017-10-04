@extends('layouts.admin')

@section('titulo-pagina')
NUEVA MARCA
@stop

@section('titulo')
NUEVA MARCA
@stop

@section('content')
	<section class="card card-blue mb-3">
		<header class="card-header">
			<a href="{!! route('admin.marca.index') !!}" class="btn btn-inline btn-danger-outline">ATRAS</a>
		</header>
		<div class="card-block">
			{!! Form::open(['method' => 'POST', 'route' => 'admin.marca.store', 'files' => true]) !!}
			{!! Field::text('nombre') !!}
			{!! Field::file('imagen') !!}
			{!! Form::submit('REGISTRAR', ['class' => 'btn btn-rounded btn-inline btn-primary-outline']) !!}
			{!! Form::close() !!}
		</div>
	</section>
@stop
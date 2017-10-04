@extends('layouts.admin')

@section('titulo-pagina')
NUEVO USUARIO
@stop

@section('titulo')
NUEVO USUARIO
@stop

@section('content')
	<section class="card card-blue mb-3">
		<header class="card-header">
			<a href="{!! route('admin.usuario.index') !!}" class="btn btn-inline btn-danger-outline">ATRAS</a>
		</header>
		<div class="card-block">
			{!! Form::open(['method' => 'POST', 'route' => 'admin.usuario.store']) !!}
			{!! Field::text('username') !!}
			{!! Field::password('password') !!}
			{!! Field::text('nombres') !!}
			{!! Field::text('paterno') !!}
			{!! Field::text('materno') !!}
			{!! Form::submit('REGISTRAR', ['class' => 'btn btn-rounded btn-inline btn-primary-outline']) !!}
			{!! Form::close() !!}
		</div>
	</section>
@stop
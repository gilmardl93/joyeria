@extends('layouts.admin')

@section('titulo-pagina')
NUEVO CONTACTO
@stop

@section('titulo')
NUEVO CONTACTO
@stop

@section('content')
	<section class="card card-blue mb-3">
		<header class="card-header">
			<a href="{!! route('admin.contactos.index') !!}" class="btn btn-inline btn-danger-outline">ATRAS</a>
		</header>
		<div class="card-block">
			{!! Form::open(['method' => 'POST', 'route' => 'admin.contactos.store']) !!}
			{!! Field::text('direccion') !!}
			{!! Field::text('telefono1') !!}
			{!! Field::text('telefono2') !!}
			{!! Field::text('email1') !!}
			{!! Field::text('email2') !!}
			{!! Form::submit('REGISTRAR', ['class' => 'btn btn-rounded btn-inline btn-primary-outline']) !!}
			{!! Form::close() !!}
		</div>
	</section>
@stop
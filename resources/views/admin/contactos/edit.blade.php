@extends('layouts.admin')

@section('titulo-pagina')
EDITAR CONTACTOS
@stop

@section('titulo')
EDITAR CONTACTOS
@stop

@section('content')
	<section class="card card-blue mb-3">
		<header class="card-header">
			<a href="{!! route('admin.contactos.index') !!}" class="btn btn-inline btn-danger-outline">ATRAS</a>
		</header>
		<div class="card-block">
			{!! Form::open(['method' => 'POST', 'route' => 'admin.contactos.update']) !!}
			@foreach($contacto as $row)
			<input type="hidden" name="id" value="{!! $row->id !!}">
			{!! Field::text('direccion', $row->direccion) !!}
			{!! Field::text('telefono1', $row->telefono1) !!}
			{!! Field::text('telefono2', $row->telefono2) !!}
			{!! Field::text('email1', $row->email1) !!}
			{!! Field::text('email2', $row->email2) !!}
			{!! Form::submit('ACTUALIZAR', ['class' => 'btn btn-rounded btn-inline btn-primary-outline']) !!}
			@endforeach
			{!! Form::close() !!}
		</div>
	</section>
@stop
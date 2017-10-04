@extends('layouts.admin')

@section('titulo-pagina')
EDITAR USUARIO
@stop

@section('titulo')
EDITAR USUARIO
@stop

@section('content')
	<section class="card card-blue mb-3">
		<header class="card-header">
			<a href="{!! route('admin.usuario.index') !!}" class="btn btn-inline btn-danger-outline">ATRAS</a>
		</header>
		<div class="card-block">
			{!! Form::open(['method' => 'POST', 'route' => 'admin.usuario.update', 'files' => true]) !!}
			@foreach($usuario as $row)
			<input type="hidden" name="id" value="{!! $row->id !!}">
			{!! Field::text('username',$row->username) !!}
			{!! Field::password('password') !!}
			{!! Field::text('nombres',$row->nombres) !!}
			{!! Field::text('paterno',$row->paterno) !!}
			{!! Field::text('materno',$row->materno) !!}
			{!! Form::submit('ACTUALIZAR', ['class' => 'btn btn-rounded btn-inline btn-primary-outline']) !!}
			@endforeach
			{!! Form::close() !!}
		</div>
	</section>
@stop
@extends('layouts.admin')

@section('titulo-pagina')
EDITAR MARCA
@stop

@section('titulo')
EDITAR MARCA
@stop

@section('content')
	<section class="card card-blue mb-3">
		<header class="card-header">
			<a href="{!! route('admin.marca.index') !!}" class="btn btn-inline btn-danger-outline">ATRAS</a>
		</header>
		<div class="card-block">
			{!! Form::open(['method' => 'POST', 'route' => 'admin.marca.update', 'files' => true]) !!}
			@foreach($marca as $row)
			<input type="hidden" name="id" value="{!! $row->id !!}">
			{!! Field::text('nombre', $row->nombre) !!}
			{!! Field::file('imagen') !!}
			<img src="{!! asset('storage/'.$row->imagen) !!}" width="100" height="80"><br>
			{!! Form::submit('ACTUALIZAR', ['class' => 'btn btn-rounded btn-inline btn-primary-outline']) !!}
			@endforeach
			{!! Form::close() !!}
		</div>
	</section>
@stop
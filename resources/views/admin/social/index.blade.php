@extends('layouts.admin')

@section('titulo-pagina')
ACTUALIZAR REDES SOCIALES
@stop

@section('titulo')
ACTUALIZAR REDES SOCIALES
@stop

@section('content')
	<section class="card card-blue mb-3">
		<header class="card-header">
			REDES SOCIALES	 
		</header>
		<div class="card-block">
			{!! Form::open(['method' => 'POST', 'route' => 'admin.social.update']) !!}
			@foreach($social as $row)
			<input type="hidden" name="id" value="{!! $row->id !!}">
			<input type="hidden" name="img" value="{!! $row->imagen !!}">
			{!! Field::text('facebook', $row->facebook) !!}
			{!! Field::text('twitter', $row->twitter) !!}
			{!! Form::submit('ACTUALIZAR', ['class' => 'btn btn-rounded btn-inline btn-primary-outline']) !!}
			@endforeach
			{!! Form::close() !!}
		</div>
	</section>
@stop
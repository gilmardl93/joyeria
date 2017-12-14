@extends('layouts.admin')

@section('titulo-pagina')
NUEVO BANNER
@stop

@section('titulo')
NUEVO BANNER
@stop

@section('content')
	<section class="card card-blue mb-3">
		<header class="card-header">
			<a href="{!! route('admin.banner.index') !!}" class="btn btn-inline btn-danger-outline">ATRAS</a>
		</header>
		<div class="card-block">
			{!! Form::open(['method' => 'POST', 'route' => 'admin.banner.store', 'files' => true]) !!}
			{!! Field::file('imagen') !!}
			{!! Form::submit('REGISTRAR', ['class' => 'btn btn-rounded btn-inline btn-primary-outline']) !!}
			{!! Form::close() !!}
		</div>
	</section>
@stop
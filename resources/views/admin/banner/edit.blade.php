@extends('layouts.admin')

@section('titulo-pagina')
EDITAR BANNER
@stop

@section('titulo')
EDITAR BANNER
@stop

@section('content')
	<section class="card card-blue mb-3">
		<header class="card-header">
			<a href="{!! route('admin.banner.index') !!}" class="btn btn-inline btn-danger-outline">ATRAS</a>
		</header>
		<div class="card-block">
			{!! Form::open(['method' => 'POST', 'route' => 'admin.banner.update']) !!}
			@foreach($banner as $row)
			<input type="hidden" name="id" value="{!! $row->id !!}">
			<input type="hidden" name="img" value="{!! $row->imagen !!}">
			{!! Field::file('imagen') !!}
			<img src="{!! asset('storage/'.$row->imagen) !!}" alt=" " class="img-responsive" />
			{!! Form::submit('ACTUALIZAR', ['class' => 'btn btn-rounded btn-inline btn-primary-outline']) !!}
			@endforeach
			{!! Form::close() !!}
		</div>
	</section>
@stop
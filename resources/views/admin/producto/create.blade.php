@extends('layouts.admin')

@section('titulo-pagina')
NUEVO PRODUCTO
@stop

@section('titulo')
NUEVO PRODUCTO
@stop

@section('css-style')
{!! Html::style('css/lib/summernote/summernote.css') !!}
@stop

@section('content')
	<section class="card card-blue mb-3">
		<header class="card-header">
			<a href="{!! route('admin.producto.index') !!}" class="btn btn-inline btn-danger-outline">ATRAS</a>
		</header>
		<div class="card-block">
			{!! Form::open(['method' => 'POST', 'route' => 'admin.producto.store', 'files' => true]) !!}
			{!! Field::text('nombre') !!}			
			<div class="summernote-theme-6">
				<label>Descripcion del producto</label>
				<textarea class="summernote" name="descripcion"></textarea>
			</div><br>
			{!! Field::file('imagen1') !!}
			{!! Field::file('imagen2') !!}
			{!! Field::file('imagen3') !!}
			{!! Field::file('imagen4') !!}
			{!! Field::text('precio') !!}
			<label>Promocion</label>
			{!! Form::select('idpromocion', $promocion, null, ['class' => 'form-control']) !!}<br>
			<label>Marca</label>
			{!! Form::select('idmarca', $marca, null, ['class' => 'form-control']) !!}<br>
			<label>Categoria</label>
			{!! Form::select('idcategoria', $categoria, null, ['class' => 'form-control']) !!}<br>
			{!! Form::submit('REGISTRAR',  ['class' => 'btn btn-rounded btn-inline btn-primary-outline']) !!}
			{!! Form::close() !!}
		</div>
	</section>
@stop

@section('js-script')
{!! Html::script('js/lib/summernote/summernote.min.js') !!}
<script>
		$(document).ready(function() {
			$('.summernote').summernote();
		});
	</script>
@stop
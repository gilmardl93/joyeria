@extends('layouts.admin')

@section('titulo-pagina')
EDITAR PRODUCTO
@stop

@section('titulo')
EDITAR PRODUCTO
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
			{!! Form::open(['method' => 'POST', 'route' => 'admin.producto.update', 'files' => true]) !!}
			@foreach($producto as $row)
			<input type="hidden" name="id" value="{!! $row->id !!}">
			<input type="hidden" name="img1" value="{!! $row->imagen1 !!}">
			<input type="hidden" name="img2" value="{!! $row->imagen2 !!}">
			<input type="hidden" name="img3" value="{!! $row->imagen3 !!}">
			<input type="hidden" name="img4" value="{!! $row->imagen4 !!}">
			{!! Field::text('nombre', $row->nombre) !!}
			<div class="summernote-theme-6">
				<label>Descripcion del producto</label>
				<textarea class="summernote" name="descripcion">{!! $row->descripcion !!}</textarea>
			</div><br>
			{!! Field::file('imagen1') !!}
			<img src="{!! asset('storage/'.$row->imagen1) !!}" width="100" height="80"><br>
			{!! Field::file('imagen2') !!}
			<img src="{!! asset('storage/'.$row->imagen2) !!}" width="100" height="80"><br>
			{!! Field::file('imagen3') !!}
			<img src="{!! asset('storage/'.$row->imagen3) !!}" width="100" height="80"><br>
			{!! Field::file('imagen4') !!}
			<img src="{!! asset('storage/'.$row->imagen4) !!}" width="100" height="80"><br><br>
			{!! Field::text('precio', $row->precio) !!}
			<label>Categoria</label>
			{!! Form::select('idcategoria', $categoria, $row->idcategoria, ['class' => 'form-control']) !!}<br>
			<label>Marca</label>
			{!! Form::select('idmarca', $categoria, $row->idmarca, ['class' => 'form-control']) !!}<br>
			<label>Promocion</label>
			{!! Form::select('idpromocion', $categoria, $row->idpromocion, ['class' => 'form-control']) !!}<br>
			{!! Form::submit('ACTUALIZAR', ['class' => 'btn btn-rounded btn-inline btn-primary-outline']) !!}
			@endforeach
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
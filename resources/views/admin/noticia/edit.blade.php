@extends('layouts.admin')

@section('titulo-pagina')
EDITAR NOTICIA
@stop

@section('titulo')
EDITAR NOTICIA
@stop

@section('css-style')
{!! Html::style('css/lib/summernote/summernote.css') !!}
@stop

@section('content')
	<section class="card card-blue mb-3">
		<header class="card-header">
			<a href="{!! route('admin.noticia.index') !!}" class="btn btn-inline btn-danger-outline">ATRAS</a>
		</header>
		<div class="card-block">
			{!! Form::open(['method' => 'POST', 'route' => 'admin.noticia.update', 'files' => true]) !!}
			@foreach($noticia as $row)
			<input type="hidden" name="id" value="{!! $row->id !!}">
			{!! Field::text('titulo', $row->titulo) !!}
			<div class="summernote-theme-6">
				<label>Descripcion de la noticia</label>
				<textarea class="summernote" name="descripcion">{!! $row->descripcion !!}</textarea>
			</div><br>
			{!! Field::file('imagen') !!}
			<img src="{!! asset('storage/'.$row->imagen) !!}" width="100" height="80"><br>
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
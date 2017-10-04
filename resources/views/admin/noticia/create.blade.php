@extends('layouts.admin')

@section('titulo-pagina')
NUEVA NOTICIA
@stop

@section('titulo')
NUEVA NOTICIA
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
			{!! Form::open(['method' => 'POST', 'route' => 'admin.noticia.store', 'files' => true]) !!}
			{!! Field::text('titulo') !!}
			<div class="summernote-theme-6">
				<label>Descripcion de la noticia</label>
				<textarea class="summernote" name="descripcion"></textarea>
			</div><br>
			{!! Field::file('imagen') !!}
			{!! Form::submit('REGISTRAR', ['class' => 'btn btn-rounded btn-inline btn-primary-outline']) !!}
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
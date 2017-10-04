@extends('layouts.admin')

@section('titulo-pagina')
EDITAR QUIENES SOMOS
@stop

@section('titulo')
EDITAR QUIENES SOMOS
@stop

@section('css-style')
{!! Html::style('css/lib/summernote/summernote.css') !!}
@stop

@section('content')
	<section class="card card-blue mb-3">
		<header class="card-header">
			<a href="{!! route('admin.somos.index') !!}" class="btn btn-inline btn-danger-outline">ATRAS</a>
		</header>
		<div class="card-block">
			{!! Form::open(['method' => 'POST', 'route' => 'admin.somos.update', 'files' => 'true']) !!}
			@foreach($somos as $row)
			<input type="hidden" name="id" value="{!! $row->id !!}">
			<input type="hidden" name="img" value="{!! $row->imagen !!}">
			{!! Field::text('titulo', $row->titulo) !!}
			<div class="summernote-theme-6">
				<label>Descripcion de quienes somos</label>
				<textarea class="summernote" name="descripcion">{!! $row->descripcion !!}</textarea>
			</div><br>
			{!! Field::file('imagen') !!}
			<img src="{!! asset('storage/'.$row->imagen) !!}" alt=" " class="img-responsive" />
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
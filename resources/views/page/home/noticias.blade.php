@extends('layouts.page.index')

@section('content')
<!-- banner-bootom-w3-agileits -->
	<div class="banner-bootom-w3-agileits">
	<div class="container">
        <div class="col-md-4 products-left">
			<div class="community-poll">
				<h4>CATEGORIAS</h4>
				<div class="swit form">	
					@foreach($categorias as $cate)
					<a href="{!! route('page.categoria.show',$cate->slug) !!}"><div class="check_box"> <div class="radio"> <label>{!! $cate->nombre !!}</label> </div></div></a>
					@endforeach
				</div>
			</div>
			
			<div class="community-poll">
				<h4>PROMOCIONES</h4>
				<div class="swit form">	
					@foreach($promocion as $prom)
					<a href="{!! route('page.promocion.show',$prom->slug) !!}"><div class="check_box"> <div class="radio"> <label>{!! $prom->nombre !!}</label> </div></div></a>
					@endforeach
				</div>
			</div>
			
			<div class="community-poll">
				<h4>NOTICIAS</h4>
				<div class="swit form">	
					@foreach($noticias as $not)
					<a href="{!! route('page.noticias.show',$not->slug) !!}"><div class="check_box"> <div class="radio"> <label>{!! $not->titulo !!}</label> </div></div></a>
					@endforeach
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-8 products-right">
			<h5>Nuestras <span>Noticias</span></h5>
			<br>
			<ul class="list-group w3-agile">
				@foreach($noticias as $not)
				  <li class="list-group-item"><a href="{!! route('page.noticias.show',$not->slug) !!}">{!! $not->titulo !!}</a></li>
				@endforeach
			</ul>
				<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
		
		
	</div>
</div>	
<!-- //mens -->
@stop
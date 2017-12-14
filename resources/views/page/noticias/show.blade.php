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
			@foreach($noticia as $row)
			<div class="men-wear-top">
				
				<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>
							<img class="img-responsive" src="{!! asset('storage/'.$row->imagen) !!}" alt=" "/>
						</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="men-wear-bottom">
			<h5>{!! $row->titulo !!}</h5>
				<div class="col-sm-8 men-wear-right">
					{!! $row->descripcion !!}
				</div>
				<div class="clearfix"></div>
			</div>
			@endforeach
				<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
		
		
	</div>
</div>	
<!-- //mens -->
@stop
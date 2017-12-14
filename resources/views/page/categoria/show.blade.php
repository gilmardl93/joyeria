@extends('layouts.page.index')

@section('css-style')
{!! Html::style('page/css/jquery-ui.css') !!}
@stop

@section('content')

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
			@foreach($categoria as $cat)
			<h5>CATEGORIA <span>{!! $cat->nombre !!}</span></h5>
			@endforeach
			@foreach($producto as $p)
							<div class="col-md-6 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="{!! asset('storage/'.$p->imagen1) !!}" alt="" class="pro-image-front">
										<img src="{!! asset('storage/'.$p->imagen1) !!}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{!! route('page.producto.show',$p->slug) !!}" class="link-product-add-cart">Ver Producto</a>
												</div>
											</div>											
									</div>
									<div class="item-info-product ">
										<h4><a href="{!! route('page.producto.show',$p->slug) !!}">{!! $p->nombre !!}</a></h4>
																			
									</div>
								</div>
							</div>	
							@endforeach	
				
				<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
		
		
	</div>
</div>	
<!-- //mens -->
@stop

@section('js-script')
@stop
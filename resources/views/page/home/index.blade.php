@extends('layouts.page.index')

@section('content')
@include('layouts.page.partials.banner2')
      <div class="agile_last_double_sectionw3ls">
      		@foreach($promocion as $pro)
            <div class="col-md-6 multi-gd-img multi-gd-text ">
					<a href="{!! route('page.promocion.show',$pro->slug) !!}"><img src="{!! asset('storage/'.$pro->imagen) !!}" alt=" "><h4> 
					<span>{!! $pro->descuento !!}</span> {!! $pro->nombre !!}</h4></a>					
			</div>
			@endforeach
			<div class="clearfix"></div>
	   </div>							
<!--/grids-->
<!-- /new_arrivals --> 
	<div class="new_arrivals_agile_w3ls_info"> 
		<div class="container">
		    <h3 class="wthree_text_info">Nuestros <span>Productos</span></h3>		
				<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li> NOVEDADES</li>
						</ul>
					<div class="resp-tabs-container">
						<div class="tab1">
							@foreach($productos as $p)
							<div class="col-md-3 product-men">
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
					</div>
				</div>	
			</div>
		</div>
		<!-- //new_arrivals --> 
@stop
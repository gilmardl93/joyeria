@extends('layouts.page.index')

@section('css-style')
{!! Html::style('page/css/flexslider.css') !!}
@stop

@section('content')

<div class="banner-bootom-w3-agileits">
	@foreach($producto as $row)
	<div class="container">
	    <div class="col-md-4 single-right-left ">
			<div class="grid images_3_of_2">
				<div class="flexslider">
					<ul class="slides">
						<li data-thumb="{!! asset('storage/'.$row->imagen1) !!}">
							<div class="thumb-image"> <img src="{!! asset('storage/'.$row->imagen1) !!}" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						<li data-thumb="{!! asset('storage/'.$row->imagen2) !!}">
							<div class="thumb-image"> <img src="{!! asset('storage/'.$row->imagen2) !!}" data-imagezoom="true" class="img-responsive"> </div>
						</li>	
						<li data-thumb="{!! asset('storage/'.$row->imagen3) !!}">
							<div class="thumb-image"> <img src="{!! asset('storage/'.$row->imagen3) !!}" data-imagezoom="true" class="img-responsive"> </div>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>	
			</div>
		</div>
		<div class="col-md-8 single-right-left simpleCart_shelfItem">
		<h3>{!! $row->nombre !!}</h3>
		<p><span class="item_price">{!! $row->precio !!}</span> <del>- S/. 20</del></p>
		</div>
	 	<div class="clearfix"> </div>

	<div class="responsive_tabs_agileits"> 
		<div id="horizontalTab">
			<ul class="resp-tabs-list">
				<li>Descripcion</li>
			</ul>
			<div class="resp-tabs-container">
				<div class="tab1">
					<div class="single_page_agile_its_w3ls">
					{!! $row->descripcion !!}
					</div>
				</div>
			</div>
		</div>	
	</div>
	@endforeach
	<div class="w3_agile_latest_arrivals">
	<h3 class="wthree_text_info">Otros <span>Productos</span></h3>	
		@foreach($productos as $item)
		<div class="col-md-3 product-men single">
			<div class="men-pro-item simpleCart_shelfItem">
				<div class="men-thumb-item">
					<img src="{!! asset('storage/'.$item->imagen1) !!}" alt="" class="pro-image-front">
					<img src="{!! asset('storage/'.$item->imagen2) !!}" alt="" class="pro-image-back">
					<div class="men-cart-pro">
						<div class="inner-men-cart-pro">
							<a href="{!! route('page.producto.show',$item->slug) !!}" class="link-product-add-cart">VER PRODUCTO</a>
						</div>
					</div>
					<span class="product-new-top">Nuevo</span>
											
				</div>
				<div class="item-info-product ">
					<h4><a href="{!! route('page.producto.show',$item->slug) !!}">{!! $item->nombre !!}</a></h4>
					<div class="info-product-price">
						<span class="item_price">{!! $item->precio !!}</span>
						<del>$189.71</del>
					</div>
																				
				</div>
			</div>
		</div>
		@endforeach              
		<div class="clearfix"> </div>
		</div>
	</div>
</div>
@stop

@section('js-script')
{!! Html::script('page/js/modernizr.custom.js') !!}
{!! Html::script('page/js/imagezoom.js') !!}

{!! Html::script('page/js/jquery.flexslider.js') !!}
<script>
	$(window).load(function() {
		$('.flexslider').flexslider({
			animation: "slide",
			controlNav: "thumbnails"
		});
	});
</script>
{!! Html::script('page/js/easy-responsive-tabs.js') !!}
<script>
	$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
	type: 'default',   
	width: 'auto', 
	fit: true,   
	closed: 'accordion', 
	activate: function(event) { 
	var $tab = $(this);
	var $info = $('#tabInfo');
	var $name = $('span', $info);
	$name.text($tab.text());
	$info.show();
	}
	});
	$('#verticalTab').easyResponsiveTabs({
	type: 'vertical',
	width: 'auto',
	fit: true
	});
	});
</script>
{!! Html::script('page/js/move-top.js') !!}
{!! Html::script('page/js/jquery.easing.min.js') !!}
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
@stop
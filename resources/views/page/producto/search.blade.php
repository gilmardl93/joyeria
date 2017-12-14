@extends('layouts.page.index')

@section('css-style')
{!! Html::style('page/css/flexslider.css') !!}
@stop

@section('content')

<div class="banner-bootom-w3-agileits">
	<div class="w3_agile_latest_arrivals">
	<h3 class="wthree_text_info">Productos <span>Encontrados</span></h3>	
		@foreach($producto as $item)
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
						<del>S/. 189.71</del>
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
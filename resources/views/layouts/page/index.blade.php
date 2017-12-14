<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
<title>@yield('titulo-pagina')</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!--//tags -->
{!! Html::style('page/css/bootstrap.css') !!}
{!! Html::style('page/css/style.css') !!}
{!! Html::style('page/css/font-awesome.css') !!}
{!! Html::style('page/css/easy-responsive-tabs.css') !!}
@yield('css-style')
<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- header -->
<div class="header" id="home">
	<div class="container">
		<ul>
		    <li> <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Iniciar Sesion </a></li>
			<li><i class="fa fa-phone" aria-hidden="true"></i> Telefono : 01 566-3514</li>
			<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">ventas@espinoza.com.pe
</a></li>
		</ul>
	</div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="header-bot_inner_wthreeinfo_header_mid">
		<div class="col-md-4 header-middle">
		@include('layouts.page.partials.search')
		</div>
		<!-- header-bot -->
		<div class="col-md-4 logo_agile">
			<a href="{!! route('page.home.index') !!}"><img src="{!! url('logo.jpg') !!}" width="300" height="80"></a>
		</div>
        <!-- header-bot -->
		<div class="col-md-4 agileits-social top_content">
		@include('layouts.page.partials.social')			
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
	<div class="container">
	@include('layouts.page.partials.menu')
	</div>
</div>
<!-- //banner-top -->
<!-- Modal1 -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Iniciar Sesion</h3>
						{!! Form::open(['method' => 'POST', 'route' => 'auth.auth.authenticate']) !!}
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="username" required="">
								<label>Usuario</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="password" name="password" required=""> 
								<label>Contraseña</label>
								<span></span>
							</div> 
							<input type="submit" value="Ingresar">
						{!! Form::close() !!}

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="{!! asset('page/images/gemas.jpg') !!}" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal1 -->
<!-- banner -->
	@yield('content')
	
<!-- footer -->
<div class="footer">
	<div class="footer_agile_inner_info_w3l">
		<div class="col-md-3 footer-left">
			@foreach($somos as $som)
			<h2><a href="{!! route('page.home.somos') !!}">{!! $som->titulo !!} </a></h2>
			<br>
			{!! str_limit($som->descripcion,100) !!}
			@endforeach
		</div>
		<div class="col-md-9 footer-right">
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4>Nuestras <span>Categorias</span> </h4>
					@foreach($categoria as $row)
					<ul>
						<li><a href="{!! route('page.categoria.show',$row->slug) !!}">{!! $row->nombre !!}</a></li>
					</ul>
					@endforeach
				</div>
				<div class="col-md-5 sign-gd flickr-post">
					<h4>Face <span>Book</span></h4>
					<ul>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
			<div class="agile_newsletter_footer">
					<div class="col-sm-6 newsleft">
				<h3>INGRESE SU EMAIL Y RECIBA INFORMACION !</h3>
			</div>
			<div class="col-sm-6 newsright">
				@if(session('success'))
					    <div class="alert alert-success">
							{!! session('success') !!}			
						</div>
						@endif
				{!! Form::open(['method' => 'POST', 'route' => 'page.suscribirse.store']) !!}
					<input type="email" placeholder="Ingrese su email..." name="email" required="">
					<input type="submit" value="ENVIAR">
				{!! Form::close() !!}
			</div>

		<div class="clearfix"></div>
	</div>
		<p class="copy-right">&copy 2017. Todos los derechos reservados | Dise&ntilde;ado por <a href="https://www.facebook.com/gilmar.moreno.7186" target="_lblank">Gilmar Moreno</a></p>
	</div>
</div>
<!-- //footer -->

<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<!-- js -->
{!! Html::script('page/js/jquery-2.1.4.min.js') !!}
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>
@yield('js-script')		
{!! Html::script('page/js/easy-responsive-tabs.js') !!}	
<script>
	$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
	type: 'default', //Types: default, vertical, accordion           
	width: 'auto', //auto or any width like 600px
	fit: true,   // 100% fit in a container
	closed: 'accordion', // Start closed if in accordion view
	activate: function(event) { // Callback function if tab is switched
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
{!! Html::script('page/js/jquery.waypoints.min.js') !!}	
{!! Html::script('page/js/jquery.countup.js') !!}	
<script>
	$('.counter').countUp();
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
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$().UItoTop({ easingType: 'easeOutQuart' });						
	});
</script>
{!! Html::script('page/js/bootstrap.js') !!}	
</body>
</html>

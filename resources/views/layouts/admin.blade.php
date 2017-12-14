<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>@yield('titulo-pagina')</title>

	<link href="img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
	<link href="img/favicon.png" rel="icon" type="image/png">
	<link href="img/favicon.ico" rel="shortcut icon">

	{!! Html::style('css/separate/pages/user.min.css') !!}
	{!! Html::style('css/lib/font-awesome/font-awesome.min.css') !!}
	{!! Html::style('css/lib/bootstrap/bootstrap.min.css') !!}
	{!! Html::style('css/main.css') !!}

	@yield('css-style')

</head>
<body class="with-side-menu">

	<header class="site-header">
	    <div class="container-fluid">
	        <a href="{!! route('admin.home.index') !!}" class="site-logo">
	            <img class="hidden-md-down" src="logo.jpg" alt="">
	            <img class="hidden-lg-down" src="logo.jpg" alt="">
	        </a>
	
	        <button class="hamburger hamburger--htla">
	            <span>toggle menu</span>
	        </button>
	        <div class="site-header-content">
	            <div class="site-header-content-in">
	                <div class="site-header-shown">
	                    
	                    <div class="dropdown user-menu">
	                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                            <img src="img/avatar-2-64.png" alt="">
	                        </button>
	                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
	                            <a class="dropdown-item" href="{!! route('auth.auth.logout') !!}"><span class="font-icon glyphicon glyphicon-log-out"></span>Cerrar Sesion</a>
	                        </div>
	                    </div>
	
	                </div><!--.site-header-shown-->
	
	                <div class="mobile-menu-right-overlay"></div>
	            </div><!--site-header-content-in-->
	        </div><!--.site-header-content-->
	    </div><!--.container-fluid-->
	</header><!--.site-header-->

	<div class="mobile-menu-left-overlay"></div>
	@include('layouts.partials.menu')
	

	<div class="page-content">
		@include('layouts.partials.header')
		
		<div class="container-fluid">
			@yield('content')
		</div><!--.container-fluid-->
	</div><!--.page-content-->

	{!! Html::script('js/lib/jquery/jquery-3.2.1.min.js') !!}
	{!! Html::script('js/lib/popper/popper.min.js') !!}
	{!! Html::script('js/lib/tether/tether.min.js') !!}
	{!! Html::script('js/lib/bootstrap/bootstrap.min.js') !!}
	{!! Html::script('js/plugins.js') !!}
	@yield('js-script')
	{!! Html::script('js/app.js') !!}
</body>
</html>
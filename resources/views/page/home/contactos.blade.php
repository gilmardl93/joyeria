@extends('layouts.page.index')

@section('content')
<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>C<span>ontactenos </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="{!! route('page.home.index') !!}">INICIO</a><i>|</i></li>
								<li>Contactos</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>
   <!--/contact-->
   <div class="banner_bottom_agile_info">
	<div class="container">
	   <div class="agile-contact-grids">
				<div class="agile-contact-left">
					<div class="col-md-6 address-grid">
						<h4>Mas <span>Información</span></h4>
							@foreach($contactos as $row)
							<div class="mail-agileits-w3layouts">
								<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
								<div class="contact-right">
									<p>Telefono </p><span>{!! $row->telefono1 !!} {!! $row->telefono2 !!}</span>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="mail-agileits-w3layouts">
								<i class="fa fa-envelope-o" aria-hidden="true"></i>
								<div class="contact-right">
									<p>Mail </p><a href="mailto:info@example.com">{!! $row->email1 !!} {!! $row->email2 !!}</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="mail-agileits-w3layouts">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
								<div class="contact-right">
									<p>Direccion</p><span>{!! $row->direccion !!}</span>
								</div>
								<div class="clearfix"> </div>
							</div>
							@endforeach
							<ul class="social-nav model-3d-0 footer-social w3_agile_social two contact">
							    <li class="share">NUESTRAS REDES : </li>
								<li><a href="#" class="facebook">
									<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
									<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
								<li><a href="#" class="twitter"> 
									<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
									<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
								<li><a href="#" class="instagram">
									<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
									<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
								<li><a href="#" class="pinterest">
									<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
									<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
							</ul>
					</div>
						@if(session('success'))
					    <div class="alert alert-success alert-fill alert-close alert-dismissible fade show" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							{!! session('success') !!}			
						</div>
						@endif
					<div class="col-md-6 contact-form">
						
						<h4 class="white-w3ls">Formulario<span>de Contactos</span></h4>
						{!! Form::open(['method' => 'POST', 'route' => 'page.contactos.store']) !!}
							<div class="styled-input agile-styled-input-top">
								{!! Form::text('nombres') !!}
								<label>Nombres</label>
								<span></span>
							</div>
							<div class="styled-input">
								{!! Form::email('email') !!}
								<label>Email</label>
								<span></span>
							</div> 
							<div class="styled-input">
								{!! Form::text('asunto') !!}
								<label>Asuntos</label>
								<span></span>
							</div>
							<div class="styled-input">
								{!! Form::textarea('mensaje') !!}
								<label>Mensajes</label>
								<span></span>
							</div>	 
							{!! Form::submit('ENVIAR') !!}
						{!! Form::close() !!}
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
       </div>
	</div>
 <!--//contact-->
<!--/grids-->
<div class="coupons">
		<div class="coupons-grids text-center">
			<div class="w3layouts_mail_grid">
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-truck" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>FREE SHIPPING</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-headphones" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>24/7 SUPPORT</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-shopping-bag" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>MONEY BACK GUARANTEE</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
					<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-gift" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>FREE GIFT COUPONS</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>

		</div>
</div>
<!--grids-->

@stop
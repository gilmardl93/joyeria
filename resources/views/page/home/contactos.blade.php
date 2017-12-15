@extends('layouts.page.index')

@section('content')
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
								@foreach($social as $row)
								@if(!empty($row->facebook))
								<li><a href="{!! url($row->facebook) !!}" class="facebook" target="_lblank">
									<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
									<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
								@endif
								@if(!empty($row->twitter))
								<li><a href="{!! url($row->twitter) !!}" class="instagram" target="_lblank">> 
									<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
									<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
								@endif
								@endforeach
							</ul>
					</div>
						
					<div class="col-md-6 contact-form">
						@if(session('success'))
					    <div class="alert alert-success">
							{!! session('success') !!}			
						</div>
						@endif
						<h4 class="white-w3ls">Formulario<span>de Contactos</span></h4>
						{!! Form::open(['method' => 'POST', 'route' => 'page.contactos.store']) !!}
							<div class="styled-input agile-styled-input-top">
								{!! Form::text('nombres') !!}
								<label style="color:white">Nombres</label>
								<span></span>
							</div>
							<div class="styled-input">
								{!! Form::email('email') !!}
								<label style="color:white">Email</label>
								<span></span>
							</div> 
							<div class="styled-input">
								{!! Form::text('asunto') !!}
								<label style="color:white">Asuntos</label>
								<span></span>
							</div>
							<div class="styled-input">
								{!! Form::textarea('mensaje') !!}
								<label style="color:white">Mensajes</label>
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
@stop
@extends('layouts.page.index')

@section('content')
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>Quienes <span>Somos </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="{!! route('page.home.index') !!}">Inicio</a><i>|</i></li>
								<li>Quienes Somos</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>
	@foreach($somos as $row)
	<div class="banner_bottom_agile_info">
	    <div class="container">
			<div class="agile_ab_w3ls_info">
				<div class="col-md-6 ab_pic_w3ls">
				   	<img src="{!! asset('storage/'.$row->imagen) !!}" alt=" " class="img-responsive" />
				</div>
				 <div class="col-md-6 ab_pic_w3ls_text_info">
				    <h5>{!! $row->titulo !!} </h5>
					<p>{!! $row->descripcion !!}</p>
				</div>
				  <div class="clearfix"></div>
			</div>
		</div>
	</div>
	@endforeach
@stop
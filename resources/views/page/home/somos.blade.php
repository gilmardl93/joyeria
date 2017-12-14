@extends('layouts.page.index')

@section('content')
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
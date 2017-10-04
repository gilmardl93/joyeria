<!-- //banner -->
    <div class="banner_bottom_agile_info">
	    <div class="container">
            <div class="banner_bottom_agile_info_inner_w3ls">
            		@foreach($categoria as $row)
            		<a href="{!! route('page.categoria.show',$row->slug) !!}">
    	           <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
						<figure class="effect-roxy">
							<img src="{!! asset('storage/'.$row->imagen) !!}" alt=" " class="img-responsive" />
							<figcaption>
								<h3>{!! $row->nombre !!}</h3>
							</figcaption>			
						</figure>
					</div>
					</a>
					@endforeach
		    </div> 
		 </div> 
    </div>
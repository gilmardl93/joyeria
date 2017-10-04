			<ul class="social-nav model-3d-0 footer-social w3_agile_social">
				<li class="share">Redes Sociales : </li>
				@foreach($social as $row)
				<li><a href="{!! url($row->facebook) !!}" class="facebook" target="_lblank">
					<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
					<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
				<li><a href="{!! url($row->twitter) !!}" class="twitter" target="_lblank">> 
					<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
					<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
				@endforeach
			</ul>
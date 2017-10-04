		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item menu__item--current">
						<a class="menu__link" href="{!! route('page.home.index') !!}">Inicio </a>
					</li>
					<li class=" menu__item">
						<a class="menu__link" href="{!! route('page.home.somos') !!}">Quienes Somos</a>
					</li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="mens.html"><img src="{!! asset('page/images/gemas.jpg') !!}" alt=" "/></a>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											@foreach($categoria as $row)
											<li><a href="{!! route('page.categoria.show',$row->slug) !!}">{!! $row->nombre !!}</a></li>
											@endforeach
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class=" menu__item"><a class="menu__link" href="{!! route('page.home.contactos') !!}">Noticias</a></li>
					<li class=" menu__item"><a class="menu__link" href="{!! route('page.home.contactos') !!}">Contactos</a></li>
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		<div class="clearfix"></div>
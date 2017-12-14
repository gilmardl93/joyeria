			{!! Form::open(['method' => 'POST', 'route' => 'page.producto.search']) !!}
				<input type="search" name="nombre" placeholder="Buscar producto..." required="">
				<input type="submit" value=" ">
				<div class="clearfix"></div>
			{!! Form::close() !!}
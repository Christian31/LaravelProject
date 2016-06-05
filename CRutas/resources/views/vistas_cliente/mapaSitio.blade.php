@extends('vistas_cliente.layoutCliente')

@section('contenido')
<div class="main_bg"><!-- start main -->
<div class="container">
    <div class="main_grid1">
        <h3 style="color:#E8645A;" class="style pull-left">Mapa del sitio CRutas</h3>
        <ol class="breadcrumb pull-right">
          
        </ol>
        <div class="clearfix"></div>
    </div>
</div>
</div>
<div class="main_btm1"><!-- start main_btm -->
<div class="container">

		<div class="main about span_of_3">
		
		
		<div class="col-md-3 span1_of_3">
			<h4>Inicio</h4>
			<p class="para">Página principal del sitio web, contiene el Formulario de busqueda para las rutas</p>
			
			<ul class="list-unstyled nav_list">
				<li><a >Formulario de busqueda de rutas</a>
					<p class="para">Al buscar una ruta mostrara una pantalla con las rutas seleccionadas</p>
					<p class="para">&nbsp;&nbsp;Contenido</p>
					<ul class="list-unstyled nav_list">
						<li><a >Rutas Seleccionadas</a>
							<p class="para">&nbsp;&nbsp;Aquí puede seleccionar para ver el detalle de cada ruta</p>
							<ul class="list-unstyled nav_list">
								<li><a >Detalle de cada ruta</a>
									<p class="para">&nbsp;&nbsp;Muestra el detalle de la ruta seleccionada</p>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				
			</ul>
		</div>	

			<div class="col-md-3 span1_of_3">
			<h4>Acerca de</h4>
			<p class="para">Página que muestra información acerca del sitio</p>
			
		
		</div>
		
		<div class="clearfix"></div>
	</div>
	
	

</div>
</div>
<script>
$('#mapa').addClass('activate');
</script>
@endsection
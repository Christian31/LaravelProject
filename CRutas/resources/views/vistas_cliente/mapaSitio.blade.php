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

		<div class="main_grid">
		
		<div class="span_of_4"><!-- start span_of_4 -->
			<div class="col-md-3 span1_of_4">
				<div class="span4_of_list">
					<span class="active"><i class="fa fa-thumbs-o-up"></i></span>
					<h3>Inicio</h3>
					<p>Página principal del sitio web, contiene el Formulario de busqueda para las rutas</p>
					<div class="read_more">
						<a class="btn btn-2 active" href="single-page.html">Contenido de Inicio</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 span1_of_4">
				<div class="span4_of_list">
					<span><i class="fa fa-lock"></i></span>
					<h3>Nosotros</h3>
					<p>Pagina que muestra información acerca del sitio</p>
					<div class="read_more">
						<a class="btn  btn-2b" href="single-page.html">view more</a>
					</div>	
				</div>	
			</div>
			
			<div class="clearfix"></div>
		</div><!-- end span_of_4 -->
	</div>
	
	

</div>
</div>
<script>
$('#nosotros').addClass('activate');
</script>
@endsection
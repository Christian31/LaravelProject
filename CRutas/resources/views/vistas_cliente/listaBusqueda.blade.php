@extends('vistas_cliente.layoutCliente')

@section('contenido')

		
	
<div class="main_bg"><!-- start main -->
<div class="container">
	<div class="main_grid1">
		<h3 style="color:#E8645A;" class="style pull-left">Rutas turísticas</h3>
		<ol class="breadcrumb pull-right">
		 
		</ol>
		<div class="clearfix"></div>
	</div>
</div>
</div>
@endsection
@section('contenido2')
<br>
		<br>
<div class="container">
<div class="col-md-2"></div>
<div class="col-md-8">
<div class="table-responsive">

  <table class="table table-bordered">
      <thead>
              <tr bgcolor="#76C7C0">
                <th><h4  align="center">Ruta</h4></th>
                <th><h4 align="center">Tiempo de recorrido</h4></th>
                <th><h4 align="center">Distancia</h4></th>
                <th><h4 align="center">Recorrido virtual</h4></th>
            </tr>
          </thead>
          <tr>
          
          <td><h5>1</h5></td>
           <td><h5>6 horas</h5></td>
            <td><h5>60 Km</h5></td>
             <td><a href="{!!URL::to('recorridoVirtual')!!}"><h5>Ver</h5></a></td>

          
          </tr>
           <tr>
          
          <td><h5>2</h5></td>
           <td><h5>6 horas</h5></td>
            <td><h5>52 Km</h5></td>
             <td><a href="{!!URL::to('recorridoVirtual')!!}"><h5>Ver</h5></a></td>
             
          
          </tr>
           <tr>
          
          <td><h5>3</h5></td>
           <td><h5>5 horas</h5></td>
            <td><h5>40 Km</h5></td>
             <td><a href="{!!URL::to('recorridoVirtual')!!}"><h5>Ver</h5></a></td>
             
          
          </tr>
            <tbody id ="datos_busqueda">
          </tbody>
  </table>

</div>
</div>
</div>
<script>
$('#buscar').addClass('activate');
</script>
@endsection
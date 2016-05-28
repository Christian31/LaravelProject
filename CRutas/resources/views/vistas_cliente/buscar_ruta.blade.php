@extends('vistas_cliente.layoutCliente')

@section('contenido')
	
<div class="main_bg"><!-- start main -->
	<div class="container">
		<div class="main_grid1">
			<h3 style="color:#E8645A;" class="style pull-left">Rutas turísticas</h3>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<script>
$('#buscar').addClass('activate');
</script>
@endsection

@section('contenido2')
<div class="container">
	<div class="contact"> 
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="contact-form">
				<form method="GET" action="{!!URL::to('/resultados')!!}"> 
					<label for="selectUbicacion" class="control-label" style="font-size:large;">Ubicación</label>
					<select class="form-control" id="selectUbicacion">
  						<option>Liberia, Guanacaste</option>
  						<option>San Carlos, Alajuela</option>
  						<option>Paraíso, Cartago</option>
  						<option>Limón, Limón</option>
  						<option>Jacó, Puntarenas</option>
					</select>
					<p class="help-block" style="font-size:small;">Escoja la ubicación desde donde desea iniciar la Ruta.</p>
					<br>
					<label for="selectTiempo" class="control-label" style="font-size:large;">Tiempo de Ruta</label>
					<select class="form-control" id="selectTiempo">
  						<option>De 1 a 3 Horas</option>
  						<option>De 3 a 6 Horas</option>
  						<option>De 6 a 9 Horas</option>
  						<option>De 9 a 12 Horas</option>
					</select>
					<p class="help-block" style="font-size:small;">Escoja el rango de tiempo que desea que la Ruta tenga.</p>
					<br>
					<label for="selectTiempo" class="control-label" style="font-size:large;">Distancia del punto de partida</label>
					<select class="form-control" id="selectDistancia">
  						<option>De 1 Km a 20 Km</option>
  						<option>De 20 Km a 40 Km</option>
  						<option>De 40 Km a 60 Km</option>
  						<option>De 60 Km a 80 Km</option>
					</select>
					<p class="help-block" style="font-size:small;">Escoja el rango de distancia que desea que la Ruta tenga en base a la ubicación de partida.</p>
					<br>
					<label for="selectPrecio" class="control-label" style="font-size:large;">Precio</label>
					<select class="form-control" id="selectPrecio">
  						<option>De 0$ a 50$</option>
  						<option>De 50$ a 100$</option>
  						<option>De 100$ o más</option>
					</select>
					<p class="help-block" style="font-size:small;">Escoja el rango de precio que desea que tengas los lugares turísticos</p>
					<br>
					<label for="selectTiempo" class="control-label" style="font-size:large;">Tipo de lugar turístico.</label>
					<select class="form-control" id="selectTipo">
  						<option>Aventura</option>
  						<option>Playa</option>
  						<option>Cultural</option>
  						<option>Ecológico</option>
					</select>
					<p class="help-block" style="font-size:small;">Escoja el tipo de lugar turístico de su preferencia.</p>
					<br><br>
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<span><input type="submit" value="Buscar"></span>
						<br><br>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection




















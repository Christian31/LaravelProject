@extends('vistas_cliente.layoutCliente')

@section('contenido')
<link href="cliente/icomoon/iconos.css" rel='stylesheet' type='text/css' />
<link href="cliente/css/galeria.css" rel='stylesheet' type='text/css' />

<script type="text/javascript" src="cliente/js/jquery.slides.js"></script>
<!--<script src="http://maps.googleapis.com/maps/api/js?v3></script>-->
<!-- <script src="http://maps.googleapis.com/maps/api/js?v3"></script>-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGNEOaAIewFw3SovuyyopdNhQHlZ4xbtg"></script>

<div class="main_bg"><!-- start main -->
  <div class="container">
    <div class="main_grid1">
      <h3 style="color:#E8645A;" class="style pull-left">Recorrido Virtual</h3>
      
      <ol class="breadcrumb pull-right">
        <li><a href="{!!URL::to('resultados')!!}"><h3>Atrás</h3></a></li>
        
      </ol>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
@endsection
@section('contenido2')
<div class="container">
 <input type="hidden" id="latitudUbicacion" value="{{$ubicacion->latitud}}">
 <input type="hidden" id="longitudUbicacion" value="{{$ubicacion->longitud}}">
  

<br>
<br>
<br>

<div   id="mapa" style="width: 550px; height: 500px; float:left;"> </div>
<script type="text/javascript">
var latitudPP = Number($("#latitudUbicacion").val());
var longitudPP = Number($("#longitudUbicacion").val());



  var puntoPartida = {lat:  latitudPP, lng: longitudPP};
  var puntoFinal = {lat: 10.226087, lng: -85.747371};

  var lugar1 = {lat:10.564218, lng: -85.399298};
 var lugar2={lat:  10.580624, lng:-85.573038};
 
 var map = new google.maps.Map(document.getElementById('mapa'), {
  center: puntoPartida,
  scrollwheel: false,
  zoom: 7
});
  var directionsDisplay = new google.maps.DirectionsRenderer({
    map: map
  });
  var waypts = [];
  waypts.push({
    location: lugar1,
    stopover: true
  });
  waypts.push({
    location: lugar2,
    stopover: true
  });
  
  // Set destination, origin and travel mode.
  var request = {
    destination:  puntoFinal,
    origin: puntoPartida,
    waypoints: waypts,
    optimizeWaypoints: true,
    travelMode: google.maps.TravelMode.DRIVING
  };
  // Pass the directions request to the directions service.
  var directionsService = new google.maps.DirectionsService();
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      // Display the route on the map.
      directionsDisplay.setDirections(response);
    }
  });
 
</script>

 <!--<center>-->

 <div style="float:left; margin-left: 80px">
 @foreach($lugaresVirtuales as $lugar)
   <div>
     <h3 style="color:#E8645A;">{{$lugar->nombre_lugar_turistico}}</h3>
     <h5>Distancia: {{$lugar->distancia_ubicacion}}Km </h5>
   <input type="hidden"  name="arreglo[]" value="{{$lugar->id_lugar_turistico}}">
     <div style="width: 440px"  class="slides">
@foreach($lugar->lista_imagenes as $imagen)
      <img height="300" src="../public/imagenes/{{$imagen->ruta_imagen}}">
       @endforeach
    </div>

    
  </div>
  @endforeach
</div>
</div>
<br>
<!--</center>-->
</div>

@endsection
@section('scripts')
{!!Html::script('cliente/js/Ruta/ruta.js')!!}
<script>
  $(function(){
    $(".slides").slidesjs({
      play: {
        active: true,
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
        effect: "slide",
        // [string] Can be either "slide" or "fade".
        interval: 3000,
        // [number] Time spent on each slide in milliseconds.
        auto: false,
        // [boolean] Start playing the slideshow on load.
        swap: true,
        // [boolean] show/hide stop and play buttons
        pauseOnHover: false,
        // [boolean] pause a playing slideshow on hover
        restartDelay: 2500
        // [number] restart delay on inactive slideshow
      }
    });
  });
</script>
<script>
window.onload= prueba;
</script>
 
@endsection


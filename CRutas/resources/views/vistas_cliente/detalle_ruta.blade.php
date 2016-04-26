@extends('vistas_cliente.layoutCliente')

@section('contenido')
<link href="cliente/icomoon/iconos.css" rel='stylesheet' type='text/css' />
<link href="cliente/css/galeria.css" rel='stylesheet' type='text/css' />

<script type="text/javascript" src="cliente/js/jquery.slides.js"></script>

<script src="http://maps.googleapis.com/maps/api/js?v3"></script>
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
 <center>
 <div class="main">
    <div> <h3 style="color:#E8645A;">Africa Safari</h3>
   <h6>  Distancia 5Km</h6>
    </div>
    <div class="slides">
      <img src="cliente/images/africa1.jpg">
      <img src="cliente/images/africa4.jpg">
      <img src="cliente/images/africa3.jpg">
    </div>

  </div>
   
  
  <div  class="main">
    <div> <h3 style="color:#E8645A;">Hidden Garden Art Gallery</h3>
    <h6>  Distancia 15Km</h6>
    </div>
    <div class="slides">
      <img src="cliente/images/galery2.jpg">
      <img src="cliente/images/galery1.jpg">
      <img src="cliente/images/galery3.jpg">
    </div>
  </div>
  <div  class="main">
   <div> <h3 style="color:#E8645A;">Pura Aventura</h3>
   <h6>  Distancia 35Km</h6>
   </div>
   <div class="slides">
    <img src="cliente/images/aventura4.jpg">
    <img src="cliente/images/aventura5.jpg">
    <img src="cliente/images/aventura6.jpg">
  </div>
</div>

<div id="mapa" style="width: 1000px; height: 500px;"> </div>
<br>
</center>
</div>
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
<script type="text/javascript">
 //   function initMap() {
  var liberia = {lat:  10.633928, lng: -85.440718};
  var africasafari = {lat:10.564218, lng: -85.399298};



 // var indianapolis2 = {lat: 10.593901, lng: -85.542952};
 var puraaventura = {lat: 10.226087, lng: -85.747371};
 var garden={lat:  10.580624, lng:-85.573038};
 var hola = {lat: 10.720107, lng: -85.410517};
 var map = new google.maps.Map(document.getElementById('mapa'), {
  center: liberia,
  scrollwheel: false,
  zoom: 7
});
  //marker
  markerUno={
    position: puraaventura ,
    map: map,
    title: "Liberia"
  }

  var gMarker = new google.maps.Marker(markerUno);
  var objHTML={
    content: '<div id="mensaje" style="width: 300px; height: 150px;"><h2>Prueba</h2> </div>'
  }

  var gIW= new google.maps.InfoWindow(objHTML);
  google.maps.event.addListener(gMarker, 'click', function(){
    gIW.open(map, gMarker);
  });

  var directionsDisplay = new google.maps.DirectionsRenderer({
    map: map
  });
  var waypts = [];
  waypts.push({
    location: africasafari,
    stopover: true
  });
  waypts.push({
    location: garden,
    stopover: true
  });
  

  // Set destination, origin and travel mode.
  var request = {
    destination:  puraaventura,
    origin: liberia,
    waypoints: waypts,
    optimizeWaypoints: true,
    travelMode: google.maps.TravelMode.DRIVING
  };

  /* var request2 = {
    destination: chicago2,
    origin: indianapolis,
     waypoints: waypts,
    travelMode: google.maps.TravelMode.DRIVING
  };*/
  

  // Pass the directions request to the directions service.
  var directionsService = new google.maps.DirectionsService();
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      // Display the route on the map.
      directionsDisplay.setDirections(response);
    }
  });
 /*  directionsService.route(request2, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      // Display the route on the map.
      directionsDisplay.setDirections(response);
    }
  });*/
//}

</script>
<script>
  $('#buscar').addClass('activate');
</script>
@endsection


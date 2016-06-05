function buscarRutas(){
	var route=getBaseDir()+"buscarRutas";
	var token = $("#token").val();
     var dato= new FormData();
        dato.append('ubicacion', $("#selectUbicacion").val());
        dato.append('tiempo', $("#selectTiempo").val());
        dato.append('distancia', $("#selectDistancia").val());
        dato.append('precio', $("#selectPrecio").val());
        dato.append('tipo', $("#selectTipo").val());
      
 	$.ajax({
				url: route,
				headers: {'X-CSRF-TOKEN': token},//Al X-CSRF-TOKEN se le envia la variable token
				type: 'POST',
				dataType: 'json',
				data: dato,
		        cache: false,
		        contentType: false,
		        processData: false,

				success:function(){
       
					//alert(response.mensaje);
					
				},//fin succes

			error:function(){
				//alert("error");
				}//fin error
			});//fin ajax	
}

function prueba(){
   var form = document.getElementById("myForm"),
          inputs = form.getElementsByTagName("input"),
          arr = [];
          
      for(var i=0, len=inputs.length; i<len; i++){
        if(inputs[i].type === "hidden"){
          arr.push(inputs[i].value);
        }
      }
}

function iniciarMapa(){
 
//alert(ubicacion);
var prueba={lat: 10.624611, lng: -85.533965};
  var puntoPartida = {lat:  10.633928, lng: -85.440718};
  var puntoFinal = {lat: 10.226087, lng: -85.747371};

  var lugar1 = {lat:10.564218, lng: -85.399298};
 var lugar2={lat:  10.580624, lng:-85.573038};
 
 var map = new google.maps.Map(document.getElementById('mapa'), {
  center: puntoPartida,
  scrollwheel: false,
  zoom: 7
});
//MARKER

/* var contentString = '<h1>Hola</h1>'

  var infowindow = new google.maps.InfoWindow({
    content: contentString
  });

  var marker = new google.maps.Marker({
    position: prueba,
    map: map,
    title: 'Prueba'
  });
  marker.addListener('click', function() {
    infowindow.open(map, marker);
  });*/

//MARKER
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
}




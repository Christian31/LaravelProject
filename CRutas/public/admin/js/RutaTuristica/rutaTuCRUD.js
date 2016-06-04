function insertarRuta(){

	var nombre=$("#nombre").val();
	var descripcion=$("#descripcion").val();
	var duracionL=$("#duracionL").val();
	var tiempoU=$("#tiempoU").val();
	var distanciaU=$("#distanciaU").val();
	var ubicacion=$("#ubicacion").val();
	var precio=$("#precio").val();
	var tipo=$("#tipo").val();
	var inputFileImage = document.getElementById("imagen");
    var imagen = inputFileImage.files;
    var latitud=$("#latitud").val();
    var longitud=$("#longitud").val();
    var clase=$("#clase").val();
    var route =getBaseDir()+"lugarTuristico";


    var token = $("#token").val();
    //alert(imagen.length);
    var dato= new FormData();
    for(i=0; i<imagen.length; i++){
	  dato.append('imagen'+i,imagen[i]); //Añadimos cada archivo a el arreglo con un indice direfente
		}
        dato.append('nombre',nombre);
        dato.append('descripcion',descripcion);
        dato.append('duracionL',duracionL);
        dato.append('tiempoU',tiempoU);
        dato.append('distanciaU',distanciaU);
        dato.append('ubicacion',ubicacion);
        //o.append('imagen',imagen);
        dato.append('precio',precio);
        dato.append('tipo',tipo);
        dato.append('latitud',latitud);
        dato.append('longitud',longitud);
        dato.append('clase',clase);
		//alert("hola");
        $.ajax({
				url: route,
				headers: {'X-CSRF-TOKEN': token},//Al X-CSRF-TOKEN se le envia la variable token
				type: 'POST',
				dataType: 'json',
				data: dato,
		        cache: false,
		        contentType: false,
		        processData: false,

				success:function(response){
					$("#msj-error").fadeOut();
					//alert('entro aqui');
					//limpiarCampos();
					$("#msj-su").html(response.lugar);
					$("#msj-success").fadeIn(2000);
					
				},//fin succes

				error:function(){
					$("#msj-error").fadeIn(2000);
					
					
				}//fin error
			});//fin ajax


}

function listarLugares(){
	var oTable = $('#tabla_lugares').dataTable();
   //Refrescar la tabla
    oTable.fnDestroy( 0 );

	var tablaDatos = $("#datos");
	var route =getBaseDir()+"listadoLugaresTuristicos";
	var routeEdit=getBaseDir()+"lugarTuristico/"

	$("#datos").empty();//Pregunta si la tabla esta vacia
	$.get(route, function(response){
		$(response).each(function(key,value){//Aqui se iteran todos los generos
			//Mediante apend se van agregando las filas
			tablaDatos.append(
				"<tr>"+
				"<td>"+value.id_lugar_turistico+"</td>"+
				"<td>"+value.nombre_lugar_turistico+"</td>"+
				"<td>"+value.descripcion_lugar_turistico+"</td>"+
				"<td><a href="+routeEdit+value.id_lugar_turistico+"/edit"+"><img class='iq-boton-editar'/></a></td>"+
				"<td><img class='iq-boton-eliminar' OnClick='eliminarLugar("+value.id_lugar_turistico+");'/></td>"+
				"</tr>"
			);
		});
		$('#tabla_lugares').DataTable({

          "retrieve": false,
       	  "language": {
            "url": "admin/plugins/datatables/Spanish.json"
        }
        });
	});
}


function editarLugar(){

	var nombre=$("#nombre").val();
	var descripcion=$("#descripcion").val();
	var duracionL=$("#duracionL").val();
	var tiempoU=$("#tiempoU").val();
	var distanciaU=$("#distanciaU").val();
	var ubicacion=$("#ubicacion").val();
	var precio=$("#precio").val();
	var tipo=$("#tipo").val();
	var inputFileImage = document.getElementById("imagen");
    var imagen = inputFileImage.files;
    var latitud=$("#latitud").val();
    var longitud=$("#longitud").val();
    var route =getBaseDir()+"editarLugarTuristico";
    var id= $("#id").val();

   // var route =getBaseDir()+"editarLugarTuristico";
      
    var token = $("#token").val();
    //alert('entro aqui');
   // alert(id);
    var dato= new FormData();
    for(i=0; i<imagen.length; i++){
	  dato.append('imagen'+i,imagen[i]); //Añadimos cada archivo a el arreglo con un indice direfente
		}
        dato.append('nombre',nombre);
        dato.append('descripcion',descripcion);
        dato.append('duracionL',duracionL);
        dato.append('tiempoU',tiempoU);
        dato.append('distanciaU',distanciaU);
        dato.append('ubicacion',ubicacion);
        dato.append('id',id);
        dato.append('precio',precio);
        dato.append('tipo',tipo);
        dato.append('latitud',latitud);
        dato.append('longitud',longitud);
     //alert(id);
        $.ajax({
				url: route,
				headers: {'X-CSRF-TOKEN': token},//Al X-CSRF-TOKEN se le envia la variable token
				type: 'POST',
				dataType: 'json',
				data: dato,
		        cache: false,
		        contentType: false,
		        processData: false,

				success:function(response){
					//alert('entro');
					window.location=getBaseDir()+"lugarTuristico";
					$("#msj-su").html(response.lugar);
					$("#msj-success").fadeIn(2000);
					
				},//fin succes

				error:function(){
					$("#msj-error").fadeIn(2000);
					
					
				}//fin error
			});//fin ajax


}

function eliminarLugar(id){
 	
			
			var route = getBaseDir()+"lugarTuristico/"+id+"";
			var token = $("#token").val();
			$.ajax({
				url: route,
				headers: {'X-CSRF-TOKEN': token},
				type: 'DELETE',
				dataType: 'json',
				success: function(){
					
					$("#msj-success").fadeIn(2000);
					$("#msj-success").fadeOut(2000);
					listarLugares();
				},//fin succes

				error:function(){
					$("#msj-error").fadeIn(2000);
					
					
				}//fin error
			});//fin ajax
		
    
 }//fin Eliminar
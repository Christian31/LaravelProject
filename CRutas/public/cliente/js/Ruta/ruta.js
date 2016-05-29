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

				success:function(response){
					alert(response.mensaje);
					
				},//fin succes

			error:function(){
				alert("error");
				}//fin error
			});//fin ajax	
}
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
    var imagen = inputFileImage.files[0];

    var route =getBaseDir()+"lugarTuristico";

    var token = $("#token").val();
    //alert(route);
    var dato= new FormData();
        dato.append('nombre',nombre);
        dato.append('descripcion',descripcion);
        dato.append('duracionL',duracionL);
        dato.append('tiempoU',tiempoU);
        dato.append('distanciaU',distanciaU);
        dato.append('ubicacion',ubicacion);
        dato.append('imagen',imagen);
        dato.append('precio',precio);
        dato.append('tipo',tipo);

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
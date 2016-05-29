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

$.validator.messages.required="Este campo es requerido";
$.validator.messages.number="Ingrese números ";
$('#insertR').validate({
	errorClass:"my-error-class",
	rules:{
		"nombre":{
			required: true
			
		},
        "descripcion":{
            required: true
        },
        "duracionL":{
            required: true,
            number: true,
        }, 
        "tiempoU":{
            required: true,
            number: true
        },
        "distanciaU":{
            required: true,
            number: true
        }

	},
	 highlight: function(element) {
        $(element).closest('.form-group').addClass('has-error');
    },
    unhighlight: function(element) {
        $(element).closest('.form-group').removeClass('has-error');
    },
    errorElement: 'span',
    errorClass: 'help-block',
    errorPlacement: function(error, element) {
        if(element.parent('.input-group').length) {
            error.insertAfter(element.parent());
        } else {
            error.insertAfter(element);
        }
    }

	});
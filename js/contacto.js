$('#Contacto1b').click(function (){
	var nombreContacto = $('#nombreContacto').val();
	var emailContacto = $('#emailContacto').val();
	var asuntoContacto = $('#asuntoContacto').val();
	var mensajeContacto = $('#mensajeContacto').val();

	if(nombreContacto == ''){
		alert('Ingresa tu nombre por favor');
		return false;
	}
	if(emailContacto == ''){
		alert('Ingresa tu correo por favor');
		return false;
	}
	if(asuntoContacto == ''){
		alert('Ingresa tu asunto por favor');
		return false;
	}
	if(mensajeContacto == ''){
		alert('Ingresa tu mensaje por favor');
		return false;
	}

	$.ajax({
            url: "./envio_correo.php",
            type: "POST", //send it through get method
            data: {nombreContacto: nombreContacto,emailContacto: emailContacto,
            	asuntoContacto: asuntoContacto,mensajeContacto:mensajeContacto },
            success: function(data) {
                alert(data);
            },
            error: function(xhr, status) {
                //Do Something to handle error
                //alert("no insertado correctamente");
            }
        });

});
function contacto() {
    if($('#nombreContacto').val()!=="" && $('#emailContacto').val()!==""&&$('#dudas').val()!=="")
    {     
        var l = $('#cargandoContacto');
        var btn = $('#btnEnviarContacto');
        l.show();
        btn.attr("disabled", "true");
        $.ajax({
            dataType: "json",
            data: {nombreContacto: $('#nombreContacto').val(), emailContacto:$('#emailContacto').val(),dudas:$('#dudas').val()}    
            ,
            type: 'GET',
            url: "http://localhost/Mitanash/Email/contacto.php",
            success: function(data){
            
                if (data.respuesta==='si' && data.respuesta1==='si')

                {
                    $('#nombreContacto').val("");
                    $('#emailContacto').val("");
                    $('#dudas').val("");
                    $('#telefonoContacto').val("");
                    btn.attr("disabled", "false");
                    l.hide('slow');
                    $('#textoResultante2').text('CONTACTO EXITOSO')();  
                }

                else{
                    window.alert("no se pudo realizar la reserva intentalo mas tarde");
                    window.location.reload();
                }

            },
            error: function(error) {
                window.alert("ocurrio un problema");
            }
        });    
        }
        else{
            window.alert("Complete los campos requeridos");
        }

}

function suscripcion() {
    if($('#emailContactoSuscriptor').val()!=="")
    {     
      var l = $('#cargandoSuscriptor');
        var btn = $('#btnSuscribir');
        l.show();
        btn.attr("disabled", "true");
        $.ajax({
            dataType: "json",
            data: {emailSuscriptor:$('#emailContactoSuscriptor').val()}    
            ,
            type: 'GET',
            url: "http://localhost/Mitanash/Email/suscripcion.php",
            success: function(data){
            
                if (data.respuesta==='si' && data.respuesta1==='si')

                {
                    $('#emailContactoSuscriptor').val("");
                    btn.attr("disabled", "false");
                    l.hide('slow');
                    $('#textoResultante').text('Suscripción Exitosa')();  
                }
                else{
                    window.alert("no se pudo suscribir intentalo mas tarde");
                    window.location.reload();
                }

            },
            error: function(error) {
                window.alert("ocurrio un problema");
            }
        });    
        }
        else{
            window.alert("Complete los campos requeridos");
        }

}


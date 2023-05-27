jQuery(document).on('submit', '#formLg', function(event) {
    event.preventDefault();
    jQuery.ajax({
            url: 'app/login.php',
            type: 'POST',
            dataType: 'json',
            data: $(this).serialize(),
            beforeSend: function() {
                $("#carga").show();
                $('.botonlg').val('Validando...');
            }
        })
        .done(function(respuesta) {
            console.log(respuesta);
            if (!respuesta.error) {
                if (respuesta.roll == '1') {
                    location = 'app/administracion/';
                } else if (respuesta.roll == '2') {
                    location = 'app/user-account/';
                } else if (respuesta.roll == '3') {
                    location = 'app/tablero/';
                } else if (respuesta.roll == '4') {
                    location = 'app/user-process/';
                } else if (respuesta.roll == '5') {
                    location = 'app/user-root/';
                }
            } else {
                swal("Algo a Salido Mal!", "Por Favor Verifica tus Datos!", "error");
                $("#usuariolg").val("");
                $("#passlg").val("");
                $("#carga").hide();


                //  $('.error').slideDown('slow');
                //  setTimeout(function(){
                //  $('.error').slideUp('slow');
                // },3000);
                $('.botonlg').val('Iniciar Sesion');
            }
        })
        .fail(function(resp) {
            console.log(resp.responseText);
        })
        .always(function() {
            console.log("complete");
        });
});

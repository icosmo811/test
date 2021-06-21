jQuery(document).ready(function($) {
    jQuery('#contact-form-enviar').on('click', function(e){
        e.preventDefault();
        var nombre = jQuery('#form-nombre').val();
        var correo = jQuery('#form-correo').val();
        var mensaje = jQuery('#form-mensaje').val();

        if (nombre != "" && correo != "") {
            // This does the ajax request
            jQuery.ajax({
                type: 'post',
                url: example_ajax_obj.ajaxurl,
                data: {
                    'action' : 'example_ajax_request',
                    'nombre' : nombre,
                    'correo' : correo,
                    'mensaje' : mensaje,
                },
                success:function(data) {
                    // This outputs the result of the ajax request
                    console.log(data);
                    alert("Gracias por utilizar el formulario de contacto, a contunuación recibirás un mensaje en tu correo.")
                    jQuery('#form-nombre').val("");
                    jQuery('#form-correo').val("");
                    jQuery('#form-mensaje').val("");
                },
                error: function(errorThrown){
                    console.log(errorThrown);
                    alert("Algo ha salido mal :C");
                    jQuery('#form-nombre').val("");
                    jQuery('#form-correo').val("");
                    jQuery('#form-mensaje').val("");
                }
            }); 
        } else {
            alert("Por favor, escribe tu nombre y correo.");
        }
    });
});


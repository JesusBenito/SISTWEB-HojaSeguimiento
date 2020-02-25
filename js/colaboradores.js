/**
 * |------------------------------------------------------|
 * | Guardar colaborador
 * |------------------------------------------------------|
 * @author Jesus Benito
 * @date 25-02-2020
 */
$('#guardar').click(function (e) {
    //$('#').val()
    if ($("#usuario_nombres").val().length < 1 ||
        $('#usuario_ap_1').val().length < 1 ||
        $('#usuario_ap_2').val().length < 1 ||
        $('#usuario_telefono').val().length < 1 ||
        $('#numero_usuario').val().length < 1 ||
        $('#usuario_email').val().length < 1 ||
        $('#nacimiento').val().length < 1 ||
        $('#area').val().length < 1 ||
        $('#direccion').val().length < 1) {
        alert("Campos vacios")
    }

    e.preventDefault();
    $.ajax({
        url: '../peticiones/nuevo-colaborador.php',
        type: 'POST',
        dataType: 'JSON',
        data: {
            'usuario_nombres': $('#usuario_nombres').val(),
            'usuario_ap_1': $('#usuario_ap_1').val(),
            'usuario_ap_2': $('#usuario_ap_2').val(),
            'usuario_telefono': $('#usuario_telefono').val(),
            'numero_usuario': $('#numero_usuario').val(),
            'usuario_email': $('#usuario_email').val(),
            'nacimiento': $('#nacimiento').val(),
            'area': $('#area').val(),
            'direccion': $('#direccion').val(),
        },
        success: function (response) {
            if (response[0].Respuesta == "OK") {
                alert("Nuevo Colaborador Guardado");
                window.location = '../colaboradores/index.phps';
            } else {
                alert("ERROR - No se pudo guardar la Cotizacion");
            }
            //window.location = "../tarifa-todas/"
        }
    });
});

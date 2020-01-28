/**
* |------------------------------------------------------|
* | Guardar Nuevo Estatus
* |------------------------------------------------------|
* @author Edgar edgar.delacruz@vlim.com.mx
* @date 27-01-2020
*/
$('#agregar_estatus').click(function (e)  {
    e.preventDefault();
    nuevoEstatus();
});
function nuevoEstatus() {
    var estatus = $('#estatus_name').val();

    if (estatus == '' || estatus == null) {
        alert("Error: Revise que los campos estes llenos.")
    } else {
        $.ajax({
            data : {
                estatus: estatus
            },
            url: "../peticiones/nuevo-estatus.php",
            dataType: 'JSON',
            type: 'POST',
            success: function (response) {
                alert("Estatus Agregado: " + response);
                window.location = "../estatus/";
            }
        });
    }
}
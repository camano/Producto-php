$(document).ready(function() {
    listarusuario();
    $('#btn').click(function() {
        alert("hola");
    })

});

function listarusuario() {
    var u = $('#url').val();
    $.ajax({
        url: u + "Ajax/usuarioAjax.php",
        data: { url: u, metodo: "listar" },
        method: "post",
    }).done(function(e) {
        $('#listarusuario').html(e);
    });
}

function eliminarusuario(id) {
    var u = $('#url').val();
    Swal.fire({
        title: '¿Estás seguro?',
        text: "Seguro quiere Eliminar este usuario",
        type: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Aceptar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url: u + "Ajax/usuarioAjax.php",
                method: "post",
                data: { idusuario: id, metodo: "eliminar" },
                success: function(e) {
                    var alerta = JSON.parse(e);
                    alertas_ajax(alerta);

                },
                error: function(error) {
                    var alerta = JSON.parse(error);
                    alertas_ajax(alerta);

                },
            });
        }
    });
}
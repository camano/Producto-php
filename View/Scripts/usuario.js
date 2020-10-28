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

function ConsultarUsuario(id) {
    desplejarmodal("View/modules/Administrador/editarUsuario.php", "Editar Usuario");
    var u = $('#url').val();
    $.ajax({
        url: u + "Ajax/usuarioAjax.php",
        method: "post",
        data: { url: u, metodo: "consultarusuario", idusuario: id },
        success: function(e) {
            var usuario = JSON.parse(e);
            $('#usuarioId').val(usuario[0].usuarioId);
            $('#usuarioNombre').val(usuario[0].usuarioNombre);
            $('#usuarioTelefono').val(usuario[0].usuarioTelefono);
            $('#usuarioCorreo').val(usuario[0].usuarioCorreo);
            if (usuario[0].rolVO.rolNombre == "Administrador") {
                $('#usuarioRol').html("<option value='1'>" + usuario[0].rolVO.rolNombre + "</option><option value='2'>Usuario</option>")
            } else {
                $('#usuarioRol').html("<option value='2'>" + usuario[0].rolVO.rolNombre + "</option><option value='1'>Administrador</option>")
            }

            console.log(usuario);
        }
    });

}

function EditarUsuario() {
    var u = $('#url').val();
    Swal.fire({
        title: '¿Estás seguro?',
        text: "Seguro quiere Actualizar este usuario",
        type: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Aceptar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.value) {
            var datos = $('#formEditarUsuario').serialize();
            $.ajax({
                url: u + "Ajax/usuarioAjax.php",
                method: "post",
                data: $('#formEditarUsuario').serialize(),

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
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
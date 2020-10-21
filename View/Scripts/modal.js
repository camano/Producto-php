function desplejarmodal(url) {
    $(".modal-body").load(url);
    $(".modal-title").html("hola");
    $(".modal-footer").html("<input type='hidden' id='id' value='" + $('#id').val() + "'>");
    $("#Modal").modal();

}

function desplejarmodal2() {
    $(".modal-body").html("hola");
    $(".modal-title").html("hola");
    $(".modal-footer").html("<input type='hidden' id='id' value='" + $('#id').val() + "'>");
    $("#Modal").modal();

}
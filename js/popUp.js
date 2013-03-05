function mostrar() {
   $("#divTrans").show();
   $("#divEstado").fadeIn('slow');
}

function cerrar() {
   $("#divEstado").fadeOut('slow');
   $("#divTrans").hide();
}

$(document).ready(function (){
    $("#divEstado").hide();
    $("#divTrans").hide();

    //Centrar div

    //$("#divEstado").css('width', '30%');
    //$("#divEstado").css('height', 'auto');

    $("#divEstado").css('left', '50%');
    $("#divEstado").css('top', '50%');

    wDiv = -1 * ($("#divEstado").width() / 2);
    hDiv = -1 * ($("#divEstado").height() / 2);

    $("#divEstado").css('margin-left', wDiv+'px');
    $("#divEstado").css('margin-top', hDiv+'px');

});



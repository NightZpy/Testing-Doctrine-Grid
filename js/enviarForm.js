$(document).ready(function (){
    $("#frmRegVoluntario").submit(function(){
        $("#divEstado").ajaxStart(function(){
            $("#divEstado").html('<h1>Los datos están siendo procesados, por favor espere.</h1><img src="/img/ajax-loader.gif" alt="Cargando" />');
            mostrar();

        })
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data:$("#frmRegVoluntario").serialize(),
            async: true,
            success: function(datos){
                setTimeout('cerrar()', 2500);
                $("#divEstado").html(datos);

            }
        });
        return false;
    });
});
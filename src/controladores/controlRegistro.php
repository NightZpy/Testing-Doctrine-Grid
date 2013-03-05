<?php
if(!empty($_POST) &&  isset($_POST['tipo'])){
    $tipo = filter_input(INPUT_POST,  "tipo", FILTER_SANITIZE_STRING);
    if($tipo == 'Voluntario'){
?>
    <div id="form_container">
        <form id="frmRegVoluntario" class="appnitro" enctype="multipart/form-data" action="/src/registros/regVoluntario.php" method="post">
            <h1><a>Formulario de Registro para Voluntario</a></h1>
            <div class="form_description">
                <h2>Formulario de Registro para Voluntario</h2>
                <p>Con este formulario podrás enviarnos los datos para su respectivo registro.</p>
            </div>
<?php
        include_once str_replace('\\', DIRECTORY_SEPARATOR, dirname(__FILE__).'\..\frm\formEmpleado.php');
        include_once str_replace('\\', DIRECTORY_SEPARATOR, dirname(__FILE__).'\..\frm\formDireccion.php');
        include_once str_replace('\\', DIRECTORY_SEPARATOR, dirname(__FILE__).'\..\frm\formVoluntario.php');
?>
            <input class="submit" type="submit" value="Registrar" />
        </form>
    </div>
        <script type="text/javascript">
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
        </script>
<?php
    }
    elseif ($tipo == 'Direccion') {
        include_once str_replace('\\', DIRECTORY_SEPARATOR, dirname(__FILE__).'\..\frm\formDireccion.php');
    }
    elseif ($tipo == 'Empleado') {
        include_once str_replace('\\', DIRECTORY_SEPARATOR, dirname(__FILE__).'\..\frm\formEmpleado.php');
        include_once str_replace('\\', DIRECTORY_SEPARATOR, dirname(__FILE__).'\..\frm\formDireccion.php');
    }
}

?>
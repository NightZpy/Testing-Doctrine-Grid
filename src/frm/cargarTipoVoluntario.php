<?php
require_once str_replace('\\', DIRECTORY_SEPARATOR, dirname(__FILE__).'\..\utileria\conectar.php');

$tablaTipoVoluntarios =  Doctrine_Core::getTable('TipoVoluntarios');
$tipoVoluntarios =  $tablaTipoVoluntarios->findAll();


if($tipoVoluntarios->count() <= 0)
{
?>
    <h3>No hay Tipo Voluntarios registrados.</h3>
<?php
}
else
{
?>
    <select class="element select small" id="selectTipoVoluntario" name="selectTipoVoluntario">
        <option selected="selected" title="Al seleccionar alguno, obtendra una descripción del mismo." value="">Tipo de Voluntario</option>
<?php
    foreach($tipoVoluntarios as $tipoVoluntario){
?>
        <option value="<?=$tipoVoluntario->__get('id');?>" title="<?=$tipoVoluntario->__get('detalles'); ?>"><?=$tipoVoluntario->__get('nombre');?></option>
<?php
    }
?>
    </select>
    <div id="divTitle" class="toolTip form_description"><em>Al seleccionar alguno, obtendra una descripción del mismo.</em></div>
<?php
}
?>


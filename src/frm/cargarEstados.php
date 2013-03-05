<?php
require_once str_replace('\\', DIRECTORY_SEPARATOR, dirname(__FILE__).'\..\utileria\conectar.php');

$tablaEstados =  Doctrine_Core::getTable('estados');
$estados =  $tablaEstados->findAll();


if($estados->count() <= 0)
{
?>
    <h3>No hay estados registrados.</h3>
<?php
}
else
{
?>
    <select class="element select small" id="selectEstado" name="selectEstado">
        <option selected="selected" value="">Estados</option>
<?php
    foreach($estados as $estado){
?>
        <option value="<?=$estado->__get('id');?>"><?=$estado->__get('nombre');?></option>
<?php
    }
?>
    </select>
<?php
}
?>


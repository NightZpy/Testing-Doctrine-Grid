<?php
require_once str_replace('\\', DIRECTORY_SEPARATOR, dirname(__FILE__).'\..\utileria\conectar.php');

$tablaCondicionCargos =  Doctrine_Core::getTable('CondicionCargos');
$condicionCargos =  $tablaCondicionCargos->findAll();


if($condicionCargos->count() <= 0)
{
?>
    <h3>No hay Condicion Cargos registrados.</h3>
<?php
}
else
{
?>
    <select class="element select small" id="selectCondicionCargo" name="selectCondicionCargo">
        <option selected="selected" value="">Condición Cargo</option>
<?php
    foreach($condicionCargos as $condicionCargo){
?>
        <option value="<?=$condicionCargo->__get('id');?>"><?=$condicionCargo->__get('nombre');?></option>
<?php
    }
?>
    </select>
<?php
}
?>


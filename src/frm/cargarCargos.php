<?php
require_once str_replace('\\', DIRECTORY_SEPARATOR, dirname(__FILE__).'\..\utileria\conectar.php');

$tablaCargos =  Doctrine_Core::getTable('Cargos');
$cargos =  $tablaCargos->findAll();


if($cargos->count() <= 0)
{
?>
    <h3>No hay Cargos registrados.</h3>
<?php
}
else
{
?>
    <select class="element select small" id="selectCargo" name="selectCargo">
        <option selected="selected" value="">Cargo</option>
<?php
    foreach($cargos as $cargo){
?>
        <option value="<?=$cargo->__get('id');?>"><?=$cargo->__get('nombre');?></option>
<?php
    }
?>
    </select>
<?php
}
?>


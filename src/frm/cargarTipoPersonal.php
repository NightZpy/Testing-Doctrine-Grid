<?php
require_once str_replace('\\', DIRECTORY_SEPARATOR, dirname(__FILE__).'\..\utileria\conectar.php');

$tablaTiposPersonal =  Doctrine_Core::getTable('TiposPersonal');
$tiposPersonal =  $tablaTiposPersonal->findAll();


if($tiposPersonal->count() <= 0)
{
?>
    <h3>No hay Tipos de Personal registrados.</h3>
<?php
}
else
{
?>
    <select class="element select small" id="selectTipoPersonal" name="selectTipoPersonal">
        <option selected="selected" value="">Tipo Personal</option>
<?php
    foreach($tiposPersonal as $tipoPersonal){
?>
        <option value="<?=$tipoPersonal->__get('id');?>"><?=$tipoPersonal->__get('nombre');?></option>
<?php
    }
?>
    </select>
<?php
}
?>


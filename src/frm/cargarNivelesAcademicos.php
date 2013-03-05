<?php
require_once str_replace('\\', DIRECTORY_SEPARATOR, dirname(__FILE__).'\..\utileria\conectar.php');

$tablaNivelesAcademicos =  Doctrine_Core::getTable('NivelesAcademicos');
$nivelesAcademicos =  $tablaNivelesAcademicos->findAll();


if($nivelesAcademicos->count() <= 0)
{
?>
    <h3>No hay Niveles Academicos registrados.</h3>
<?php
}
else
{
?>
    <select class="element select small" id="selectNivelAcademico" name="selectNivelAcademico">
        <option selected="selected" value="">Nivel Académico</option>
<?php
    foreach($nivelesAcademicos as $nivelAcademico){
?>
        <option value="<?=$nivelAcademico->__get('id');?>"><?=$nivelAcademico->__get('nombre');?></option>
<?php
    }
?>
    </select>
<?php
}
?>


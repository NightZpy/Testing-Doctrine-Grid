<?php
require_once str_replace('\\', DIRECTORY_SEPARATOR, dirname(__FILE__).'\..\utileria\conectar.php');
require_once str_replace('\\', DIRECTORY_SEPARATOR, dirname(__FILE__).'\..\utileria\Validar.class.php');

if(($parroquiaId = Validar::validarEntradaNumericaGet('parroquiaId')) != FALSE){
        $tablaInstituciones = Doctrine_Core::getTable('Instituciones');
        $instituciones = $tablaInstituciones->findByParroquiaId($parroquiaId);

        if($instituciones->count() <= 0)
        {
?>
    <h3>No hay Instituciones registrados.</h3>
<?php
        }
        else
        {
?>
    <label  class="description" for="selectInstitucion">Institución donde trabaja:</label>
    <select class="element select small" id="selectInstitucion" name="selectInstitucion">
        <option selected="selected" value="">Institución</option>
<?php
            foreach($instituciones as $institucion){
        //echo "<br />".$institucion->ubicacion;
?>
        <option value="<?=$institucion->__get('id');?>"><?=$institucion->__get('nombre');?></option>
<?php
            }
?>
    </select>
<?php
        }
}
?>


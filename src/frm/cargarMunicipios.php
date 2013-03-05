<?php
require_once str_replace('\\', DIRECTORY_SEPARATOR, dirname(__FILE__).'\..\utileria\conectar.php');

if(!empty($_GET) &&  isset($_GET['estadoId']) && $_GET['estadoId'] != ''){
    $estadoId = filter_input(INPUT_GET,  "estadoId", FILTER_SANITIZE_NUMBER_INT);

$tablaMunicipios =  Doctrine_Core::getTable('municipios');
$municipios =  $tablaMunicipios->findByEstadoId($estadoId);


    if($municipios->count() <= 0)
    {
?>
    <h3>No hay municipios registrados.</h3>
<?php
    }
    else
    {
?>
    <label  class="description" for="selectMunicipio">Municipio:</label>
    <select class="element select small" id="selectMunicipio" name="selectMunicipio">
        <option selected="selected" value="">Municipio</option>
<?php
        foreach($municipios as $municipio){
?>
        <option value="<?=$municipio->__get('id');?>"><?=$municipio->__get('nombre');?></option>
<?php
        }
?>
    </select>
<?php
    }
}
?>


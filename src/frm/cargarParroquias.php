<?php
require_once str_replace('\\', DIRECTORY_SEPARATOR, dirname(__FILE__).'\..\utileria\conectar.php');

if(!empty($_GET) &&  isset($_GET['municipioId']) && $_GET['municipioId'] != ''){
    $municipioId = filter_input(INPUT_GET,  "municipioId", FILTER_SANITIZE_NUMBER_INT);

$tablaParroquias =  Doctrine_Core::getTable('parroquias');
$parroquias =  $tablaParroquias->findByMunicipioId($municipioId);


    if($parroquias->count() <= 0)
    {
?>
    <h3>No hay parroquias registradas.</h3>
<?php
    }
    else
    {
?>
    <label  class="description" for="selectParroquia">Parroquia:</label>
    <select class="element select small" id="selectParroquia" name="selectParroquia">
        <option selected="selected" value="">Parroquias</option>
<?php
        foreach($parroquias as $parroquia){
?>
        <option value="<?=$parroquia->__get('id');?>"><?=$parroquia->__get('nombre');?></option>
<?php
        }
?>
    </select>
<?php
    }
}
?>

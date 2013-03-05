<?php
phpinfo();
require_once str_replace('\\', DIRECTORY_SEPARATOR, dirname(__FILE__).'\..\src\utileria\conectar.php');
$archivo = fopen("Planteles.csv", "r");

if(!$archivo)
    die ("Error cargando Planteles.csv");

$contenido = fread($archivo, filesize("Planteles.csv"));

$contenido=ereg_replace("\r\n", "\n" , $contenido);

$lineas = explode("\n", $contenido);

$dependencias = array();
$municipios = array();
$parroquias = array();

for($i=0; $i<count($lineas)-1; $i++)
{
    $registro = explode("|", $lineas[$i]);
    $dependencias[] = $registro[11];
    $municipios[] = $registro[3];
    $parroquias[] = $registro[4];
}

$dependencias = array_unique($dependencias);
$municipios = array_unique($municipios);
$parroquias = array_unique($parroquias);

$dependencias = str_replace('"', "", $dependencias);
$municipios = str_replace('"', "", $municipios);
$parroquias = str_replace('"', "", $parroquias);

$seq = new Doctrine_Sequence_Pgsql();

foreach ($dependencias as $dependencia)
{
    $dependenciasObj = new Dependencias();
    $dependenciasObj->nombre = "$dependencia";
    $dependenciasObj->save();
    echo "<br />1";
}


foreach ($parroquias as $parroquia)
{
    $parroquiasObj = new Parroquias();
    $parroquiasObj->nombre = "$parroquia";
    $parroquiasObj->municipio_id  = 1;
    $parroquiasObj->save();
}
echo "<br />2";

for($i=0; $i<count($lineas)-1; $i++)
{
    $registro = explode("|", $lineas[$i]);

    $dea = str_replace('"', "", $registro[0]);
    $dea = str_replace('vacio', '', $dea);

    $codEstadistico = str_replace('vacio', '', $registro[1]);
    $codEstadistico = str_replace('"', "", $codEstadistico);

    $nombre = $registro[2];
    $nombre = chop($nombre);
    $nombre = str_replace('"', "", $nombre);
    $nombre = str_replace('vacio', '', $nombre);
    $nombre = chop($nombre);

    $municipio = str_replace('"', "", $registro[3]);
    $parroquia = str_replace('"', "", $registro[4]);

    $ubicacion = '';

    $ubiArray = array();
    for ($j = 5; $j <= 10; $j++) {
        $ubiArray[] = $registro[$j];
    }

    $ubiArray = array_unique($ubiArray);

    foreach ($ubiArray as $ubi) {
        $ubi = str_replace('vacio', '', $ubi);
        $ubicacion .= $ubi;
    }


    $ubicacion = str_replace('"', "", $ubicacion);
    $ubicacion = str_replace('vacio', '', $ubicacion);
    $ubicacion = chop($ubicacion);

    $dependencia = str_replace('"', "", $registro[11]);
    $dependencia = str_replace('vacio', '', $dependencia);

    $telefono = chop($registro[12]);
    $telefono = str_replace('"', "", $telefono);
    $nada;
    $telefono = str_replace('vacio', $nada, $telefono);

    $tablaParroquias =  Doctrine_Core::getTable('parroquias');
    $parroquias = $tablaParroquias->findByNombre($parroquia);

    $tablaDependencias =  Doctrine_Core::getTable('dependencias');
    $dependencias = $tablaDependencias->findByNombre($dependencia);

   

    $direccion = new Direcciones();

    $direccion->ubicacion = $ubicacion;
    $direccion->telefono  = $telefono;
    $direccion->parroquia_id = $parroquias[0]->__get('id');
    $direccion->municipio_id = 1;
    $direccion->save();

    $direccionId = $seq->currId("contador_direcciones");

    $institucion = new Instituciones();
    $institucion->cod_dea = $dea;
    $institucion->cod_estadistico = $codEstadistico;
    $institucion->nombre = $nombre;
    $institucion->direccion_id = $direccionId;
    $institucion->cedula_director = "00000000";
    $institucion->dependencia_id = $dependencias[0]->__get('id');
    $institucion->medios_laborales_id = 1;
    $institucion->subsistemas_laborales_id = 1;
    $institucion->save();

}
?>


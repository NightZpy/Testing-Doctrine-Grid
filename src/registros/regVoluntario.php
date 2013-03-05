<?php
require_once str_replace('\\', DIRECTORY_SEPARATOR, dirname(__FILE__).'\..\utileria\conectar.php');
require_once str_replace('\\', DIRECTORY_SEPARATOR, dirname(__FILE__).'\..\utileria\Validar.class.php');
require_once str_replace('\\', DIRECTORY_SEPARATOR, dirname(__FILE__).'\..\utileria\Fecha.php');

if(($cedula = Validar::validarEntradaNumericaPost('txtCedula')) == FALSE){
?>
    <b>¡Cédula incorrecta!</b>
<?php
    exit(1);
}

if(($nombres = Validar::validarEntradaCadenaPost('txtNombres')) == FALSE){
?>
    <b>¡Nombres incorrectos!</b>
<?php
    exit(1);
}

if(($apellidos = Validar::validarEntradaCadenaPost('txtApellidos')) == FALSE){
?>
    <b>¡Apellidos incorrectos!</b>
<?php
    exit(1);
}

if(($nacionalidad = Validar::validarEntradaCadenaPost('selectNacionalidad')) == FALSE){
?>
    <b>¡Nacionalidad incorrecta!</b>
<?php
    exit(1);
}

if(($sexo = Validar::validarEntradaCadenaPost('txtSexo')) == FALSE){
?>
    <b>¡Sexo incorrecto!</b>
<?php
    exit(1);
}

if(($estadoCivil = Validar::validarEntradaCadenaPost('selectEstadoCivil')) == FALSE){
?>
    <b>¡Estado civil incorrecto!</b>
<?php
    exit(1);
}

if(($fechaNacimiento = Validar::validarEntradaFechaPost('txtFechaNacimiento')) == FALSE){
?>
    <b>¡Fecha de Nacimiento incorrecta!</b>
<?php
    exit(1);
}

if(($email = Validar::validarEntradaEmailPost('txtEmail')) == FALSE){
?>
    <b>¡Email incorrecto!</b>
<?php
    exit(1);
}


if(($movil = Validar::validarEntradaNumericaPost('txtMovil')) == FALSE){
?>
    <b>¡Movil incorrecto!</b>
<?php
    exit(1);
}

if(($tipoPersonal = Validar::validarEntradaNumericaPost('selectTipoPersonal')) == FALSE){
?>
    <b>¡Tipo de Personal incorrecto!</b>
<?php
    exit(1);
}

if(($nivelAcademico = Validar::validarEntradaNumericaPost('selectNivelAcademico')) == FALSE){
?>
    <b>¡Nivel Academico incorrecto!</b>
<?php
    exit(1);
}

if(($cargo = Validar::validarEntradaNumericaPost('selectCargo')) == FALSE){
?>
    <b>¡Cargo incorrecto!</b>
<?php
    exit(1);
}

if(($condicionCargo = Validar::validarEntradaNumericaPost('selectCondicionCargo')) == FALSE){
?>
    <b>¡Condición Cargo incorrecta!</b>
<?php
    exit(1);
}

if(($ubicacion = Validar::validarEntradaCadenaPost('txtUbicacion')) == FALSE){
?>
    <b>¡Ubicación incorrecta!</b>
<?php
    exit(1);
}

if(($telfUbicacion = Validar::validarEntradaNumericaPost('txtTelfUbicacion')) == FALSE){
?>
    <b>¡Teléfono de Ubicación incorrecto!</b>
<?php
    exit(1);
}

if(($estado = Validar::validarEntradaNumericaPost('selectEstado')) == FALSE){
?>
    <b>¡Estado incorrecto!</b>
<?php
    exit(1);
}

if(($municipio = Validar::validarEntradaNumericaPost('selectMunicipio')) == FALSE){
?>
    <b>¡Municipio incorrecto!</b>
<?php
    exit(1);
}

if(($parroquia = Validar::validarEntradaNumericaPost('selectParroquia')) == FALSE){
?>
    <b>¡Parroquia incorrecta!</b>
<?php
    exit(1);
}

if(($institucion = Validar::validarEntradaNumericaPost('selectInstitucion')) == FALSE){
?>
    <b>¡Institución incorrecta!</b>
<?php
    exit(1);
}

if(($vehiculo = Validar::validarEntradaCadenaPost('selectVehiculo')) == FALSE){
?>
    <b>¡Vehiculo incorrecto!</b>
<?php
    exit(1);
}

if(($estudia = Validar::validarEntradaCadenaPost('txtEstudia')) == FALSE){
?>
    <b>¡Debe especificar Si estudia o No!</b>
<?php
    exit(1);
}

if($estudia == 'Si')
{
    if(($queEstudia = Validar::validarEntradaCadenaPost('txtQueEstudia')) == FALSE){
    ?>
        <b>¡Debe especificar Qué Estudia!</b>
    <?php
        exit(1);
    }

    if(($sitioEstudio = Validar::validarEntradaCadenaPost('txtSitioEstudio')) == FALSE){
    ?>
        <b>¡Debe especificar el Sitio donde Estudia!</b>
    <?php
        exit(1);
    }
}

if(($estudiosCulminados = Validar::validarEntradaCadenaPost('txtEstudiosCulminados')) == FALSE){
?>
    <b>¡Estudios Culminados Incorrectos!</b>
<?php
    exit(1);
}

if(($cursos = Validar::validarEntradaCadenaPost('txtCursos')) == FALSE){
?>
    <b>¡Cursos Incorrectos!</b>
<?php
    exit(1);
}

if(($tiempoLibre = Validar::validarEntradaCadenaPost('txtTiempoLibre')) == FALSE){
?>
    <b>¡Tiempo Libre Incorrecto!</b>
<?php
    exit(1);
}

if(($orgComunitaria = Validar::validarEntradaCadenaPost('txtOrgComunitaria')) == FALSE){
?>
    <b>¡Organización Comunitaria Incorrecta!</b>
<?php
    exit(1);
}

if(($tipoVoluntario = Validar::validarEntradaNumericaPost('selectTipoVoluntario')) == FALSE){
?>
    <b>¡Tipo de Voluntario Incorrecto!</b>
<?php
    exit(1);
}

$direccion = new Direcciones();
$direccion->ubicacion    = "$ubicacion";
$direccion->telefono     = "$telfUbicacion";
$direccion->parroquia_id = $parroquia;
$direccion->municipio_id = $municipio;
$direccion->save();
$seq = new Doctrine_Sequence_Pgsql();
$direccionId = $seq->currId("contador_direcciones");

$empleado = new Empleados();
$empleado->cedula               = "$cedula";
$empleado->nombre               = "$nombres";
$empleado->apellido             = "$apellidos";
$empleado->nacionalidad         = "$nacionalidad";
$empleado->sexo                 = "$sexo";
$empleado->estado_civil         = "$estadoCivil";

$fecha = new Fecha();
$fechaNacimiento = $fecha->cambiarFormato($fechaNacimiento);
$empleado->fecha_nacimiento     = "$fechaNacimiento";

$empleado->movil                = "$movil";
$empleado->email                = "$email";
$empleado->direccion_id         =  $direccionId;
$empleado->tipo_personal_id     =  $tipoPersonal;
$empleado->nivel_academico_id   =  $nivelAcademico;
$empleado->cargo_id             =  $cargo;
$empleado->condicion_cargo_id   =  $condicionCargo;
$empleado->institucion_id       =  $institucion;
$empleado->save();

$voluntario = new Voluntarios();
$voluntario->cedula_empleado = "$cedula";
$voluntario->automovil = "$vehiculo";
if($estudia == 'Si')
{
    $voluntario->estudia = True;
    $voluntario->que_estudia = "$queEstudia";
    $voluntario->sitio_estudio = "$sitioEstudio";
}
$voluntario->estudios_culminados        = "$estudiosCulminados";
$voluntario->cursos                     = "$cursos";
$voluntario->tiempo_libre               = "$tiempoLibre";
$voluntario->organizacion_comunitaria   = "$orgComunitaria";
$voluntario->tipo_id                    =  $tipoVoluntario;
$voluntario->save();
?>
<h1><p>¡Datos procesados correctamente!</p></h1>

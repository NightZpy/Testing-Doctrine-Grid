<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Direcciones', 'doctrine');

/**
 * BaseDirecciones
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $ubicacion
 * @property string $telefono
 * @property integer $parroquia_id
 * @property integer $municipio_id
 * @property Parroquias $Parroquias
 * @property Municipios $Municipios
 * @property Doctrine_Collection $Empleados
 * @property Doctrine_Collection $Instituciones
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDirecciones extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('direcciones');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'contador_direcciones',
             ));
        $this->hasColumn('ubicacion', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('telefono', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('parroquia_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             ));
        $this->hasColumn('municipio_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Parroquias', array(
             'local' => 'parroquia_id',
             'foreign' => 'id'));

        $this->hasOne('Municipios', array(
             'local' => 'municipio_id',
             'foreign' => 'id'));

        $this->hasMany('Empleados', array(
             'local' => 'id',
             'foreign' => 'direccion_id'));

        $this->hasMany('Instituciones', array(
             'local' => 'id',
             'foreign' => 'direccion_id'));
    }
}
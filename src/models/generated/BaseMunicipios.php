<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Municipios', 'doctrine');

/**
 * BaseMunicipios
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nombre
 * @property integer $estado_id
 * @property Estados $Estados
 * @property Doctrine_Collection $Direcciones
 * @property Doctrine_Collection $Parroquias
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMunicipios extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('municipios');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'contador_municipios',
             ));
        $this->hasColumn('nombre', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
        $this->hasColumn('estado_id', 'integer', 4, array(
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
        $this->hasOne('Estados', array(
             'local' => 'estado_id',
             'foreign' => 'id'));

        $this->hasMany('Direcciones', array(
             'local' => 'id',
             'foreign' => 'municipio_id'));

        $this->hasMany('Parroquias', array(
             'local' => 'id',
             'foreign' => 'municipio_id'));
    }
}
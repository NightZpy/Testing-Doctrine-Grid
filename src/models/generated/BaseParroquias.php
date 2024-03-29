<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Parroquias', 'doctrine');

/**
 * BaseParroquias
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nombre
 * @property integer $municipio_id
 * @property Municipios $Municipios
 * @property Doctrine_Collection $Direcciones
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseParroquias extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('parroquias');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'contador_parroquias',
             ));
        $this->hasColumn('nombre', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
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
        $this->hasOne('Municipios', array(
             'local' => 'municipio_id',
             'foreign' => 'id'));

        $this->hasMany('Direcciones', array(
             'local' => 'id',
             'foreign' => 'parroquia_id'));
    }
}
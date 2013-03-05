<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('SubsistemasLaborales', 'doctrine');

/**
 * BaseSubsistemasLaborales
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nombre
 * @property Doctrine_Collection $Instituciones
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSubsistemasLaborales extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('subsistemas_laborales');
        $this->hasColumn('id', 'integer', 2, array(
             'type' => 'integer',
             'length' => 2,
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'contador_subsistemas_laborales',
             ));
        $this->hasColumn('nombre', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Instituciones', array(
             'local' => 'id',
             'foreign' => 'subsistemas_laborales_id'));
    }
}
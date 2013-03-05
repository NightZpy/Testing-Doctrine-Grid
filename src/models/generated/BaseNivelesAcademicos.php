<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('NivelesAcademicos', 'doctrine');

/**
 * BaseNivelesAcademicos
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nombre
 * @property Doctrine_Collection $Empleados
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseNivelesAcademicos extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('niveles_academicos');
        $this->hasColumn('id', 'integer', 2, array(
             'type' => 'integer',
             'length' => 2,
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'contador_nivel_academico',
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
        $this->hasMany('Empleados', array(
             'local' => 'id',
             'foreign' => 'nivel_academico_id'));
    }
}
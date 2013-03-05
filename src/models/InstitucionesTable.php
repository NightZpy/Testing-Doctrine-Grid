<?php

/**
 * InstitucionesTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class InstitucionesTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object InstitucionesTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Instituciones');
    }

    public function findByParroquiaId($parroquiaId) {
        $q =  Doctrine_Query::create()
            ->select('i.*')
            ->from('Instituciones i')
            ->innerJoin('i.Direcciones d')
            ->where('d.parroquia_id=?', $parroquiaId);
        return  $q->execute();
    }
}
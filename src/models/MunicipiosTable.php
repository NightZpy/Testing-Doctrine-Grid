<?php

/**
 * MunicipiosTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class MunicipiosTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object MunicipiosTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Municipios');
    }

    public function findByEstado($estado) {

        $q = Doctrine_Query::create()
            ->select('m.*')
            ->from('Municipios m')
            //->innerJoin('c.Estados u')
            ->where('m.estado_id=?',$estado->id);
        return $q->execute();     
    }
}
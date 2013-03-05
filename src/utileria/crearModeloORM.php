<?php
require_once (dirname(__FILE__).'/Doctrine/Doctrine.php');
//require_once (dirname(__FILE__).'/../../doctrine-dbal/bin/doctrine-dbal.php');

spl_autoload_register(array('Doctrine',  'autoload'));

$conn  =  Doctrine_Manager::connection('pgsql://moralyluces:moralyluces@localhost/moralyluces',  'doctrine');
Doctrine_Core::generateModelsFromDb('../models',  array('doctrine'), array('generateTableClasses' => true));
//Doctrine_Core::generateModelsFromYaml('./', '../models', array('generateTableClasses' => true));
//Doctrine_Core::generateYamlFromDb("./");
//Doctrine_Core::generateSqlFromModels();
?>

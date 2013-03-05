<?php
require_once (dirname(__FILE__).'/Doctrine/Doctrine.php');
spl_autoload_register(array('Doctrine',  'autoload'));
$conn  =  Doctrine_Manager::connection('pgsql://tecniweb_moralyluces:moralyluces@localhost/tecniweb_moralyluces',  'doctrine');
//$conn->setCharset('utf8')
Doctrine_Core::loadModels(dirname(__FILE__).'/../models');

?>

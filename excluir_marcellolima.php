<?php
   require_once 'dao_marcellolima.php';
   
   $objetoDao = new DAOMarcellolima();
   $objetoDao->removerMarcellolima($_REQUEST['codigo']);
 	
	header('Location: view_marcellolima.php');
	exit;
?>
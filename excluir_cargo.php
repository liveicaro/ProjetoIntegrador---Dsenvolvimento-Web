<?php
   require_once 'dao_cargo.php';
   
   $objetoDao = new DAOCargo();
   $objetoDao->removerCargo($_REQUEST['codigo']);
 	
	header('Location: view_cargo.php');
	exit;
?>
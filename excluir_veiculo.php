<?php
   require_once 'dao_veiculo.php';
   
   $objetoDao = new DAOVeiculo();
   $objetoDao->removerVeiculo($_REQUEST['codigo']);
 	
	header('Location: view_veiculo.php');
	exit;
?>
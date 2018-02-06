<?php
   require_once 'dao_cliente.php';
   
   $objetoDao = new DAOCliente();
   $objetoDao->removerCliente($_REQUEST['codigo']);
 	
	header('Location: view_cliente.php');
	exit;
?>



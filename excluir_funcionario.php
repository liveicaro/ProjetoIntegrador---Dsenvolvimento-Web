<?php
   require_once 'dao_funcionario.php';
   
   $objetoDao = new DAOFuncionario();
   $objetoDao->removerFuncionario($_REQUEST['codigo']);
 	
	header('Location: view_funcionario.php');
	exit;
?>
<?php
   require_once 'dao_locacao.php';
   
   $objetoDao = new DAOLocacao();
   $objetoDao->removerVeiculo($_REQUEST['codigo']);
 	
	header('Location: view_locacao.php');
	exit;
?>
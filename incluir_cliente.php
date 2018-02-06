<?php
   require_once 'dao_cliente.php';
   
   $objetoCliente = new Cliente();
   $objetoCliente->setNome($_REQUEST['nome']);
   $objetoCliente->setCpf($_REQUEST['cpf']);
   $objetoCliente->setPontosfidelidade($_REQUEST['pontosfidelidade']);
   $objetoCliente->setStatus($_REQUEST['status']);
   
   $dao = new DAOCliente();
   $dao->cadastrarCliente($objetoCliente, $_REQUEST['codigoCliente']); 	
	
	
	
	header('Location: view_cliente.php');
	exit;
?>
<?php
   require_once 'dao_locacao.php';

   $objetoLocacao = new Locacao();
   $objetoLocacao->setData($_REQUEST['data']);
   $objetoLocacao->setDatadevolucao($_REQUEST['datadevolucao']);
   $objetoLocacao->setStatus($_REQUEST['status']);
   $objetoLocacao->setFuncionario($_REQUEST['funcionario']);
   $objetoLocacao->setCliente($_REQUEST['cliente']);
   $objetoLocacao->setVeiculo($_REQUEST['veiculo']);  
   
   
   $dao = new DAOLocacao();
   $dao->cadastrarLocacao($objetoLocacao); //basta apenas passar o código do cargo, não precisa criar um objeto cargo para inserir esse objeto na classe Funcionario, pois para cadastrar no banco só precisamos da informação do código
 	
	header('Location: view_locacao.php');
	exit;
?>
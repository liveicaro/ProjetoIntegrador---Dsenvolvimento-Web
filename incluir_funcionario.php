<?php
   require_once 'dao_funcionario.php';

   $objetoFuncionario = new Funcionario();
   $objetoFuncionario->setNome($_REQUEST['nome']);
   $objetoFuncionario->setCpf($_REQUEST['cpf']);
   $objetoFuncionario->setDataAdmissao($_REQUEST['dataAdmissao']);
   
   $dao = new DAOFuncionario();
   $dao->cadastrarFuncionario($objetoFuncionario, $_REQUEST['codigoFuncionario']); //basta apenas passar o código do cargo, não precisa criar um objeto cargo para inserir esse objeto na classe Funcionario, pois para cadastrar no banco só precisamos da informação do código
 	
	header('Location: view_funcionario.php');
	exit;
?>


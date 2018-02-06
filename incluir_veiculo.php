<?php
   require_once 'dao_veiculo.php';

   $objetoVeiculo = new Veiculo();
   $objetoVeiculo->setModelo($_REQUEST['modelo']);
   $objetoVeiculo->setCor($_REQUEST['cor']);
   $objetoVeiculo->setAno($_REQUEST['ano']);
   $objetoVeiculo->setPlaca($_REQUEST['placa']);
   $objetoVeiculo->setTipo($_REQUEST['tipo']);
   $objetoVeiculo->setStatus($_REQUEST['status']);  
   
   
   $daof = new DAOVeiculo();
   $daof->cadastrarVeiculo($objetoVeiculo, $_REQUEST['codigoVeiculo']); //basta apenas passar o código do cargo, não precisa criar um objeto cargo para inserir esse objeto na classe Funcionario, pois para cadastrar no banco só precisamos da informação do código
 	
	header('Location: view_veiculo.php');
	exit;
?>
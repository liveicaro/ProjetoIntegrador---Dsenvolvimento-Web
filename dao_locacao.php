<?php
    require_once 'conexao.php';
	require_once 'class_locacao.php';
	require_once 'class_cargo.php';
	require_once 'class_funcionario.php';
	require_once 'class_veiculo.php';
	require_once 'class_cliente.php';
	
	
	class DAOLocacao{
		
		private $conexao;
		
		public function __construct(){
			$this->conexao = new Conexao();
				 if($this->conexao->conectar() == false){
				 	 echo "Não conectou!" . mysql_error();	
				 }
		}	
		
		public function cadastrarLocacao(Locacao $locacao){
			$data = $data->getData();
			$datadevolucao = $datadevolucao->getDatadevolucao();
			$status = $status->getStatus();
			$funcionario = $funcionario->getFuncionario();
			$cliente = $cliente->getCliente();
			$veiculo = $veiculo->getVeiculo();			
			
			

			$sql = "INSERT INTO veiculo (locacao_data, locacao_data_devolucao, locacao_status, locacao_funcionario_id, locacao_cliente_id, locacao_veiculo_id) 
						 VALUES ('$data', '$datadevolucao', '$status', '$funcionario', '$cliente', '$veiculo')";
			$this->conexao->executarQuery($sql);
		}
		
		public function listarLocacao(){
			$lista = $this->conexao->executarQuery("SELECT * FROM locacao");
			$arrayLocacao = array();
			
			while ($linha = mysqli_fetch_array($lista)) {
				
				$locacao = new Locacao($linha['locacao_id'],$linha['locacao_data'],$linha['locacao_data_devolucao'],$linha['locacao_status'],$linha['locacao_funcionario_id'],$linha['locacao_cliente_id'],$linha['locacao_veiculo_id'], $cliente);
				array_push($arrayLocacaos,$locacao);
			}
			return $arrayLocacao;
		}
		
		
		public function removerLocacao($codigo){
			$sql = "DELETE FROM veiculo WHERE locacao_id = '$codigo'";
			$this->conexao->executarQuery($sql);
		}
		 
		
	}
	
?>
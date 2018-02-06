<?php
    require_once 'conexao.php';
	require_once 'class_cliente.php'; 
	
	class DAOCliente{
		
		private $conexao;
		
		public function __construct(){
			$this->conexao = new Conexao();
				 if($this->conexao->conectar() == false){
				 	 echo "Não conectou!" . mysql_error();	
				 }
			
		}	
		
		public function cadastrarCliente(Cliente $cliente){
			$nome = $cliente->getNome();
			$cpf = $cliente->getCpf(); 			
			$pontosfidelidade = $cliente->getPontosfidelidade();
			$status = $cliente->getStatus(); 

			$sql = "INSERT INTO cliente (cliente_nome, cliente_cpf, cliente_pontos_fidelidade, cliente_status) VALUES ('$nome', '$cpf', '$pontosfidelidade', '$status')";
			$this->conexao->executarQuery($sql);
		}
		
		public function listarClientes(){
			$lista = $this->conexao->executarQuery("SELECT * FROM cliente");
			$arrayClientes = array();
			
			while ($linha = mysqli_fetch_array($lista)) {
				$cliente = new Cliente($linha['cliente_id'],$linha['cliente_nome'],$linha['cliente_cpf'],$linha['cliente_pontos_fidelidade'],$linha['cliente_status']);
				array_push($arrayClientes,$cliente);
			}
			return $arrayClientes;
		}
		
		public function removerCliente($codigo){
			$sql = "DELETE FROM cliente WHERE cliente_id = '$codigo'";
			$this->conexao->executarQuery($sql);
		}
		 
		
	}
	
?>
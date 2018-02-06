<?php
    require_once 'conexao.php';
	require_once 'class_veiculo.php';
	
	
	class DAOVeiculo{
		
		private $conexao;
		
		public function __construct(){
			$this->conexao = new Conexao();
				 if($this->conexao->conectar() == false){
				 	 echo "Não conectou!" . mysql_error();	
				 }
		}	
		
		public function cadastrarVeiculo(Veiculo $veiculo){
			$modelo = $veiculo->getModelo();
			$cor = $veiculo->getCor();
			$ano = $veiculo->getAno();
			$placa = $veiculo->getPlaca();
			$tipo = $veiculo->getTipo();
			$status = $veiculo->getStatus();			
			
			

			$sql = "INSERT INTO veiculo (veiculo_modelo, veiculo_cor, veiculo_ano, veiculo_placa, veiculo_tipo, veiculo_status) 
						 VALUES ('$modelo', '$cor', '$ano', '$placa', '$tipo', '$status')";
			$this->conexao->executarQuery($sql);
		}
		
		public function listarVeiculos(){
			$lista = $this->conexao->executarQuery("SELECT * FROM veiculo");
			$arrayVeiculos = array();
			
			while ($linha = mysqli_fetch_array($lista)) {
				$veiculo = new Veiculo($linha['veiculo_id'],$linha['veiculo_modelo'],$linha['veiculo_cor'],$linha['veiculo_ano'],$linha['veiculo_placa'],$linha['veiculo_tipo'],$linha['veiculo_status']);
				array_push($arrayVeiculos,$veiculo);
			}
			return $arrayVeiculos;
		}
		
		
		public function removerVeiculo($codigo){
			$sql = "DELETE FROM veiculo WHERE veiculo_id = '$codigo'";
			$this->conexao->executarQuery($sql);
		}
		 
		
	}
	
?>
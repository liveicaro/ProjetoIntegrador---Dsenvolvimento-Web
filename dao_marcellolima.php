<?php
    require_once 'conexao.php';
	require_once 'class_marcellolima.php'; 
	
	class DAOMarcellolima{
		
		private $conexao;
		
		public function __construct(){
			$this->conexao = new Conexao();
				 if($this->conexao->conectar() == false){
				 	 echo "Não conectou!" . mysql_error();	
				 }
			
		}	
		
		public function cadastrarMarcellolima(Marcellolima $marcellolima){
			$primeironome = $marcellolima->getPrimeironome();
			$ultimonome = $marcellolima->getUltimonome(); 
			

			$sql = "INSERT INTO marcellolima (marcellolima_primeiro_nome, marcellolima_ultimo_nome) VALUES ('$primeironome', '$ultimonome')";
			$this->conexao->executarQuery($sql);
		}
		
		public function listarMarcellolima(){
			$lista = $this->conexao->executarQuery("SELECT * FROM marcellolima");
			$arrayMarcellolima = array();
			
			while ($linha = mysqli_fetch_array($lista)) {
				$marcellolima = new Marcellolima($linha['marcellolima_id'],$linha['marcellolima_primeiro_nome'],$linha['marcellolima_ultimo_nome']);
				array_push($arrayMarcellolima,$marcellolima);
			}
			return $arrayMarcellolima;
		}
		
		public function removerMarcellolima($codigo){
			$sql = "DELETE FROM marcellolima WHERE marcellolima_id = '$codigo'";
			$this->conexao->executarQuery($sql);
		}
		 
		
	}
	
?>
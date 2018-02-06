<?php
    require_once 'conexao.php';
	require_once 'class_cargo.php'; 
	
	class DAOCargo{
		
		private $conexao;
		
		public function __construct(){
			$this->conexao = new Conexao();
				 if($this->conexao->conectar() == false){
				 	 echo "Não conectou!" . mysql_error();	
				 }
			
		}	
		
		public function cadastrarCargo(Cargo $cargo){
			$nome = $cargo->getNome();
			$descricao = $cargo->getDescricao(); 
			$salarioBase = $cargo->getSalarioBase();

			$sql = "INSERT INTO cargo (cargo_nome, cargo_descricao, cargo_salariobase) VALUES ('$nome', '$descricao', '$salarioBase')";
			$this->conexao->executarQuery($sql);
		}
		
		public function listarCargos(){
			$lista = $this->conexao->executarQuery("SELECT * FROM cargo");
			$arrayCargos = array();
			
			while ($linha = mysqli_fetch_array($lista)) {
				$cargo = new Cargo($linha['cargo_id'],$linha['cargo_nome'],$linha['cargo_descricao'],$linha['cargo_salariobase']);
				array_push($arrayCargos,$cargo);
			}
			return $arrayCargos;
		}
		
		public function removerCargo($codigo){
			$sql = "DELETE FROM cargo WHERE cargo_id = '$codigo'";
			$this->conexao->executarQuery($sql);
		}
		 
		
	}
	
?>
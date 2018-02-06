<?php
    require_once 'conexao.php';
	require_once 'class_funcionario.php';
	require_once 'class_cargo.php';
	
	class DAOFuncionario{
		
		private $conexao;
		
		public function __construct(){
			$this->conexao = new Conexao();
				 if($this->conexao->conectar() == false){
				 	 echo "Não conectou!" . mysql_error();	
				 }
		}	
		
		public function cadastrarFuncionario(Funcionario $funcionario, $codigoCargo){
			$nome = $funcionario->getNome();
			$cpf = $funcionario->getCpf();
			$dataAdmissao = $funcionario->getDataAdmissao();
			$codigoCargo = $codigoCargo;
			

			$sql = "INSERT INTO funcionario (funcionario_nome, funcionario_cpf, funcionario_data_admissao, funcionario_cargo_id) 
						 VALUES ('$nome', '$cpf', '$dataAdmissao', '$codigoCargo')";
			$this->conexao->executarQuery($sql);
		}
		
		public function listarFuncionarios(){
			$lista = $this->conexao->executarQuery("SELECT * FROM funcionario, cargo WHERE funcionario_cargo_id = cargo_id");
			$arrayFuncionarios = array();
			
			while ($linha = mysqli_fetch_array($lista)) {
				$cargo = new Cargo($linha['funcionario_cargo_id'], $linha['cargo_nome'], $linha['cargo_descricao'], $linha['cargo_salariobase']);
				$funcionario = new Funcionario($linha['funcionario_id'],$linha['funcionario_nome'],$linha['funcionario_cpf'],
									$linha['funcionario_data_admissao'], $cargo); //observe aqui, que $cargo é o objeto da classe Cargo() que estamos adicionando dentro da classe Funcionário()
				
				array_push($arrayFuncionarios,$funcionario);
			}
			return $arrayFuncionarios;
		}
		
		public function removerFuncionario($codigo){
			$sql = "DELETE FROM funcionario WHERE funcionario_id = '$codigo'";
			$this->conexao->executarQuery($sql);
		}
		 
		
	}
	
?>
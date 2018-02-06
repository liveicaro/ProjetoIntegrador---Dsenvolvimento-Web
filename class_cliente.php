<?php
   class Cliente{
   		private $codigo;
		private $nome;
		private $cpf;
		private $pontosfidelidade;
		private $status;
		
		public function __construct($codigo=0, $nome="", $cpf="", $pontosfidelidade=0, $status="0"){
			$this->codigo = $codigo;	
			$this->nome = $nome;
			$this->cpf = $cpf;
			$this->pontosfidelidade = $pontosfidelidade;
			$this->status = $status;
		}		
		
		public function setCodigo($codigo){
			$this->codigo = $codigo;
		}
		
		public function getCodigo(){
			return $this->codigo;
		}
		
		public function setNome($nome){
			$this->nome = $nome;
		}
		
		public function getNome(){
			return $this->nome;
		}
		
		public function setCpf($cpf){
			$this->cpf = $cpf;
		}
		
		public function getCpf(){
			return $this->cpf;
		}
		
		public function setPontosfidelidade($pontosfidelidade){
			$this->pontosfidelidade = $pontosfidelidade;
		}
		
		public function getPontosfidelidade(){
			return $this->pontosfidelidade;
		}
	
	    public function setStatus($status){
			$this->status = $status;
		}
		
		public function getStatus(){
			return $this->status;
		}
   }
?>
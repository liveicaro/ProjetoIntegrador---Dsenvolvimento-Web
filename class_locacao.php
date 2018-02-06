<?php
   class Locacao{
   		private $codigo;
		private $data;
		private $datadevolucao;
		private $status;		
		private $funcionario;
		private $cliente;
		private $veiculo;
					
		//private $veiculo; //esse atributo será para adicionar um objeto do tipo classe Veiculo(), e não simplesmente o nome do cargo, mas o objeto inteiro (essa é a forma mais coerente)
		
		public function __construct($codigo=0, $data="", $datadevolucao="", $status="", $funcionario="", $cliente="", $veiculo=""){
			$this->codigo = $codigo;	
			$this->data = $data;	
			$this->datadevolucao = $datadevolucao;
			$this->status = $status;
			$this->funcionario = $funcionario;
			$this->cliente = $cliente;
			$this->veiculo = $veiculo;
			
			//$this->veiculo = $veiculo;
			
			
		}		
		
		public function setCodigo($codigo){
			$this->codigo = $codigo;
		}
		
		public function getCodigo(){
			return $this->codigo;
		}
		
		public function setData($data){
			$this->data = $data;
		}
		
		public function getData(){
			return $this->data;
		}
		
		public function setDatadevolucao($datadevolucao){
			$this->datadevolucao = $datadevolucao;
		}
		
		public function getDatadevolucao(){
			return $this->datadevolucao;
		}
		
		public function setStatus($status){
			$this->status = $status;
		}
		
		public function getStatus(){
			return $this->status;
		}
	
		public function setFuncionario($funcionario){
			$this->funcionario = $funcionario;
		}
		
		public function getFuncionario(){
			return $this->funcionario;
		}
		
		
		public function setCliente($cliente){
			$this->cliente = $cliente;
		}
		
		public function getCliente(){
			return $this->cliente;
		}
		
		public function setVeiculo($veiculo){
			$this->veiculo = $veiculo;
		}
		
		public function getVeiculo(){
			return $this->veiculo;
		}
		
		
		
   }
?>
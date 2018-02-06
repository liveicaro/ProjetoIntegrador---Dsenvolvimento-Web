<?php
   class Veiculo{
   		private $codigo;
		private $modelo;
		private $cor;		
		private $ano;
		private $placa;
		private $tipo;
		private $status;				
		//private $veiculo; //esse atributo será para adicionar um objeto do tipo classe Veiculo(), e não simplesmente o nome do cargo, mas o objeto inteiro (essa é a forma mais coerente)
		
		public function __construct($codigo=0, $modelo="", $cor="", $ano="", $placa="", $tipo="", $status=""){
			$this->codigo = $codigo;	
			$this->modelo = $modelo;
			$this->cor = $cor;
			$this->ano = $ano;
			$this->placa = $placa;
			$this->tipo = $tipo;
			$this->status = $status;
			//$this->veiculo = $veiculo;
			
			
		}		
		
		public function setCodigo($codigo){
			$this->codigo = $codigo;
		}
		
		public function getCodigo(){
			return $this->codigo;
		}
		
		public function setModelo($modelo){
			$this->modelo = $modelo;
		}
		
		public function getModelo(){
			return $this->modelo;
		}
		
		public function setCor($cor){
			$this->cor = $cor;
		}
		
		public function getCor(){
			return $this->cor;
		}
		
		public function setAno($ano){
			$this->ano = $ano;
		}
		
		public function getAno(){
			return $this->ano;
		}
	
		public function setPlaca($placa){
			$this->placa = $placa;
		}
		
		public function getPlaca(){
			return $this->placa;
		}
		
		
		public function setTipo($tipo){
			$this->tipo = $tipo;
		}
		
		public function getTipo(){
			return $this->tipo;
		}
		
		public function setStatus($status){
			$this->status = $status;
		}
		
		public function getStatus(){
			return $this->status;
		}
		
		
		
   }
?>
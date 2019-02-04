<?php
	class Conexion{
		private $servidor="localhost";
		private $usuario="root";
		private $clave="12345";
		private $baseDatos="crud poo";	
		
		public function conectar(){
			$conexion=new mysqli($this->servidor,$this->usuario,$this->clave,$this->baseDatos);
			return $conexion;
		}
		public function cerrarConexion(){
			$conexion=$this->conectar();
			$conexion->close();
		}
		
	}
?>
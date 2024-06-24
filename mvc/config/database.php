<?php
	
	class Conectar {
		
		public static function conexion(){
			
			$conexion = new mysqli("localhost", "romario", "1234567", "mvc");
			return $conexion;
			
		}
	}
?>
<?php
	
	class Type_vehiculosModel {
		
		private $db;
		private $type_vehiculos;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->type_vehiculos = array();
		}
		
		public function get_type_vehiculos()
		{
			$sql = "SELECT * FROM tipos_vehiculos";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->type_vehiculos[] = $row;
			}
			return $this->type_vehiculos;
		}
		
		public function insertar($descripcion){
			
			$resultado = $this->db->query("INSERT INTO tipos_vehiculos (descripcion) VALUES ('$descripcion')");
			
		}
		
		public function modificar($id, $descripcion){
			
			$resultado = $this->db->query("UPDATE tipos_vehiculos SET descripcion='$descripcion' WHERE id = '$id'");			
		}
		
		public function eliminar($id){
			
			$resultado = $this->db->query("DELETE FROM tipos_vehiculos WHERE id = '$id'");
			
		}
		
		public function get_type_vehiculo($id)
		{
			$sql = "SELECT * FROM tipos_vehiculos WHERE id='$id' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();
			return $row;
		}
	} 
?>

<?php
	
	class Tipo_vehiculosController {
		
		public function __construct(){
			require_once "models/Type_vehiculosModel.php";
		}
		
		public function index(){
			$tipos_vehiculos = new Type_vehiculosModel();
			$data["titulo"] = "Tipos de vehiculos";
			$data["tipos_vehiculos"] = $tipos_vehiculos->get_type_vehiculos();
			
			require_once "views/tipos_vehiculos/tipos_vehiculos.php";	
		}
		
		public function nuevo(){
			
			$data["titulo"] = "crear tipo de vehiculo";
			require_once "views/tipos_vehiculos/tipos_vehiculos_nuevo.php";
		}
		
		public function guarda(){
			
			$descripcion = $_POST['descripcion'];

			$vehiculos = new Type_vehiculosModel();
			$vehiculos->insertar($descripcion);
			$data["titulo"] = "Tipos de vehiculos";
			$this->index();
		}
		
		public function modificar($id){
			
			$vehiculos = new Type_vehiculosModel();
			
			$data["id"] = $id;
			$data["tipos_vehiculos"] = $vehiculos->get_type_vehiculo($id);
			$data["titulo"] = "tipo de vehiculos";
			require_once "views/tipos_vehiculos/tipos_vehiculos_modifica.php";
		}
		
		public function actualizar(){

			$id = $_POST['id'];
			$descripcion = $_POST['descripcion'];

			$vehiculos = new Type_vehiculosModel();
			$vehiculos->modificar($id, $descripcion);
			$data["titulo"] = "tipo de vehiculos";
			$this->index();
		}
		
		public function eliminar($id){
			
			$vehiculos = new Type_vehiculosModel();
			$vehiculos->eliminar($id);
			$data["titulo"] = "Tipos de vehiculos";
			$this->index();
		}	
	}
?>
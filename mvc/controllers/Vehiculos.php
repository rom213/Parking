<?php
	
	class VehiculosController {

		private $auth;
		
		public function __construct(){
			require_once "models/VehiculosModel.php";
			require_once "models/Type_vehiculosModel.php";
			require_once "middleware/auth.php";

			$this->auth = new AuthMiddleware();
		}
		
		public function index(){
			$this->auth->check();
			$vehiculos = new Vehiculos_model();
			$data["titulo"] = "Vehiculos";
			$data["vehiculos"] = $vehiculos->get_vehiculos();
/* 			print_r($data);
			exit; */
			
			require_once "views/vehiculos/vehiculos.php";	
		}
		
		public function nuevo(){
			$tipo_vehiculos = new Type_vehiculosModel();
			$data["titulo"] = "Vehiculos";
			$data["tipo_vehiculos"] = $tipo_vehiculos->get_type_vehiculos();

/* 			print_r($data); */

			require_once "views/vehiculos/vehiculos_nuevo.php";
		}
		
		public function guarda(){
			
			$placa = $_POST['placa'];
			$marca = $_POST['marca'];
			$modelo = $_POST['modelo'];
			$anio = $_POST['anio'];
			$color = $_POST['color'];
			$tipo = $_POST['tipo'];
			
			$vehiculos = new Vehiculos_model();
			$vehiculos->insertar($placa, $marca, $modelo, $anio, $color, $tipo);
			$data["titulo"] = "Vehiculos";
			$this->index();
		}
		
		public function modificar($id){
			
			$vehiculos = new Vehiculos_model();
			$tipo_vehiculos = new Type_vehiculosModel();

			$data["id"] = $id;
			$data["vehiculos"] = $vehiculos->get_vehiculo($id);
			$data["tipo_vehiculos"] = $tipo_vehiculos->get_type_vehiculos();

			$data["titulo"] = "Vehiculos";


			require_once "views/vehiculos/vehiculos_modifica.php";
		}
		
		public function actualizar(){

			$id = $_POST['id'];
			$placa = $_POST['placa'];
			$marca = $_POST['marca'];
			$modelo = $_POST['modelo'];
			$anio = $_POST['anio'];
			$color = $_POST['color'];

			$vehiculos = new Vehiculos_model();
			$vehiculos->modificar($id, $placa, $marca, $modelo, $anio, $color);
			$data["titulo"] = "Vehiculos";
			$this->index();
		}
		
		public function eliminar($id){
			
			$vehiculos = new Vehiculos_model();
			$vehiculos->eliminar($id);
			$data["titulo"] = "Vehiculos";
			$this->index();
		}	
	}
?>
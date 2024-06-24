<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo $data["titulo"]; ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
	<div class="container">
		<h2><?php echo $data["titulo"]; ?></h2>

		<form id="nuevo" name="nuevo" method="POST" action="index.php?c=vehiculos&a=guarda" autocomplete="off">
			<div class="form-group">
				<label for="placa">Placa</label>
				<input type="text" class="form-control" id="placa" name="placa" />
			</div>

			<div class="form-group">
				<label for="marca">Marca</label>
				<input type="text" class="form-control" id="marca" name="marca" />
			</div>

			<div class="form-group">
				<label for="modelo">Modelo</label>
				<input type="text" class="form-control" id="modelo" name="modelo" />
			</div>

			<div class="form-group">
				<label for="anio">Año</label>
				<input type="text" class="form-control" id="anio" name="anio" />
			</div>

			<div class="form-group">
				<label for="color">Color</label>
				<input type="text" class="form-control" id="color" name="color" />
			</div>

			<br>

			<div class="form-group">
				<label for="tipo">Tipo de vehiculo</label>
				<select class="form-select form-select-xm mb-3" id="tipo" name="tipo" aria-label="Selecciona tipo de vehiculo">
					<option selected>Selecciona tipo de auto</option>
					<?php foreach ($data["tipo_vehiculos"] as $dato) {
						echo "<option value='" . $dato["id"] . "'>" . $dato["descripcion"] . "</option>";
					} ?>
				</select>
			</div>


			<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>

		</form>
	</div>
</body>

</html>
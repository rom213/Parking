<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<script src="assets/js/bootstrap.min.js" ></script>
	</head>
	
	<body>
		<div class="container">
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=users&a=guarda" autocomplete="off">
				<div class="form-group">
					<label for="username">username</label>
					<input type="text" class="form-control" id="username" name="username" />
				</div>
				
				<div class="form-group">
					<label for="email">email</label>
					<input type="email" class="form-control" id="email" name="email" />
				</div>

				<div class="form-group">
					<label for="password">password</label>
					<input type="password" class="form-control" id="password" name="password" />
				</div>
				
				<div class="form-group">
					<label for="birth_day">birth_day</label>
					<input type="date" class="form-control" id="birth_day" name="birth_day" />
				</div>
				
				<div class="form-group">
					<label for="direccion">direccion</label>
					<input type="text" class="form-control" id="direccion" name="direccion" />
				</div>
				
<!-- 				<div class="form-group">
					<label for="color">Color</label>
					<input type="text" class="form-control" id="color" name="color" />
				</div> -->
				
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				
			</form>
		</div>
	</body>
</html>
<?php
	
?>

<!DOCTYPE html>
<html>
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
			
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=users&a=actualizar" autocomplete="off">
				
				<input type="hidden" id="id" name="id" value="<?php echo $data["id"]; ?>" />
				
				<div class="form-group">
					<label for="username">username</label>
					<input type="text" class="form-control" id="username" name="username" value="<?php echo $data["users"]["username"]?>" />
				</div>
				
				<div class="form-group">
					<label for="marca">email</label>
					<input type="text" class="form-control" id="email" name="email" value="<?php echo $data["users"]["email"]?>" />
				</div>
				
				<div class="form-group">
					<label for="birth_day">birth_day</label>
					<input type="text" class="form-control" id="birth_day" name="birth_day" value="<?php echo $data["users"]["birth_day"]?>" />
				</div>
				
				<div class="form-group">
					<label for="direccion">direccion</label>
					<input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $data["users"]["direccion"]?>" />
				</div>
				
				
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				
			</form>
		</body>
	</html>		
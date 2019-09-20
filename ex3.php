<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicio 3 - Registro</title>
	</head>

	<style type="text/css">
		*{
		font-family: Verdana;
	}

	.content{
		border: 1px solid #777;
		border-radius: 5px;
		padding: 20px;
		width: 90%;
		height: auto;
		margin: 0px auto;
	}

	</style>
	<body>
		<div class="content">
			<form action="ex3.php" method="POST">
				<div class="form-group">
					<label for="name">Nombre</label>
					<input type="text" name="name" />
				</div>
				<div class="form-group">
					<label for="gender">Género</label>
					<input type="radio" name="gender" value="Hombre" checked="checked" /> <span>Hombre</span>
					<input type="radio" name="gender" value="Mujer"/> <span>Mujer</span>
				</div>
				<input type="submit" name="submit" value="Registrar">
			</form>
		</div>
	</body>
</html>

<?php 

	if(isset($_POST['submit'])){
		if($_POST['name'] != NULL){
			$file = fopen("registros.txt", "a");
	    	fwrite($file, $_POST['name'] . "\t" . $_POST['gender'] . PHP_EOL);
			fclose($file);
		}
	}

 ?>

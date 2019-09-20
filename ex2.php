<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 2 - Equación de Segundo Grado</title>
</head>

<style type="text/css">
	*{
		font-family: Verdana;
	}

	input{
		width: 99%;
		margin: 0 auto;
		margin-bottom: 10px;
	}

	.input-submit{
		width: 20%;
		float: right;
		margin-top: 10px;
	}

	.content, .content-result{
		border: 1px solid #777;
		border-radius: 5px;
		padding: 20px;
		width: 90%;
		height: auto;
		margin: 0px auto;
	}

	.content{
		margin: 150px auto 20px auto;
		overflow: hidden;
	}

</style>

<body>

<div class="content">
	<form action="ex2.php" method="POST">
		<div class="form-group">
			<label for="a">Variable A</label>
			<input type="text" name="a" />
		</div>

		<div class="form-group">
			<label for="b">Variable B</label>
			<input type="text" name="b" />
		</div>

		<div class="form-group">
			<label for="c">Variable C</label>
			<input type="text" name="c" />
		</div>

		<input type="submit" class="input-submit" name="submit" value="Enviar" />
	</form>
</div>

<?php 

	function equacioSegonGrau(){
		$a = $_POST["a"];
		$b = $_POST["b"];
		$c = $_POST["c"];

		if($a != NULL AND $b !== NULL AND $c != NULL){
			$neg = -1;
		    $menosb = $b*$neg;
		    $oper1 = pow($b,2);
		    $oper2 = 4*$a*$c;
		    $resta = $oper1-$oper2;
		    $raiz = pow($resta,(1/2));
		    $dosa = 2*$a;
		    $result1 = ($menosb + $raiz)/$dosa;
		    $result2 = ($menosb - $raiz)/$dosa;
		    $result = "El resultado de x es  " . $result1 . " y de y es  " . $result2;

		    echo "<div class='content-result'>" . $result . "</div>";
		}else{
			echo "<div class='content-result'>Faltan Datos</div>";
		}

		
	}


	if(isset($_POST['submit'])){
		equacioSegonGrau();
	} 
 ?>

</body>
</html>
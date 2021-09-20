<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>


	<?php


		$n1 =  $_GET["num1"];

		$n2 =  $_GET["num2"];


		echo "<h1>HSuma de los numeros</h1>";


		echo "El numero 1 es : ". $_GET["num1"];

		echo "<br/>";

		echo "El numero 2 es : ".$_GET["num2"];


		echo "<br/>";

			//Salida del resultado de la operacion
		echo "El resultado de la suma es: ". $n1+$n2;


	?>
</body>
</html>
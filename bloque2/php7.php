<!DOCTYPE html>
<html>
<head>
	<title>Bloque 2 ejercicio 7</title>
</head>
<body>
	<?php
		$base = rand(1,10);
		$exponente = rand(1,10);
		echo "El numero base es: ".$base."<br>";
		echo "El numero exponente es: ".$exponente."<br>";

		function calcPotencia($base, $exponente){
			return pow($base,$exponente);
		}
		echo "Este es el resultado de la potencia calculada: ".calcPotencia($base,$exponente);
	?>
</body>
</html>
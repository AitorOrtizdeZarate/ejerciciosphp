<!DOCTYPE html>
<html>
<head>
	<title>Bloque 2 ejercicio 9</title>
</head>
<body>
	<?php
		function calcular($lado){
			if($lado < 0){
				throw new Exception ($lado."Es negativo");
			}
			else{
				return pow($lado, 2);
			}
		}

		$randNum = [];

		for($i=0; $i<4; $i++){
			array_push($randNum, rand(0,50));
		} 

		array_push($randNum, rand(-50,-1));

		for($i = 0; $i < sizeof($randNum); $i++){
			echo "El area es: ".calcular($randNum[$i])."<br>";
		}
	?>
</body>
</html>
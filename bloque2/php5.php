<!DOCTYPE html>
<html>
<head>
    <title>Bloque 2 ejercicio 5</title> 
</head>
<body>

    
	<?php
		$year = 2019;
		$meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
		$dias = [];
		
		echo "<table border 1>";
		
		for($i=1; $i<=sizeof($meses); $i++){
			 echo "<tr>";
		echo "<td>".$meses[($i-1)]."</td>";
		array_push($dias, cal_days_in_month(CAL_GREGORIAN, $i, $year));
			echo "<td>".$dias[($i-1)]."</td>";
			  echo "</tr>"; 
		}

		
		
		echo "</table>";
	?>
</body>
</html>
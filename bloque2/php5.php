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
		
		for($i=1; $i<=12; $i++){
			 echo "<tr>";
		echo "<td>".$meses[($i-1)]."</td>";
			 
		}

		for($i=1; $i<=12; $i++){
			
			array_push($dias, cal_days_in_month(CAL_GREGORIAN, $i, $year));
			echo "<td>".$dias[($i-1)]."</td>";
			  echo "</tr>"; 
		}
		
		echo "</table>";
		
		
		/*echo "<table border 1>";
		for($i=1; $i<=12; $i++){
			echo "<tr>";
			$dias = $meses, cal_days_in_month(CAL_GREGORIAN, $i, $year);
				for($j = 0; $j<$meses;$j++){
                        echo "<td>".$meses[($i-1)]."</td>";       
                    }
			/*echo $meses[($i-1)].'<br>';
			echo "</tr>";
		}
		  echo "</table>";*/
	?>
</body>
</html>
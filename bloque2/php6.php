<!DOCTYPE html>
<html>
<head>
	<title>Bloque 2 ejercicio 6</title>
</head>
<body>
	<?php
		
		
		$cumples = [
			'Enero' => ['Eki','Joseba','Aitor'],
			'Febrero' => ['Julen'],
			'Marzo' => ['Ibai', 'Esti', 'Naia'],
			'Abril' => ['Maitane', 'Leire'],
			'Mayo' => ['Lur', 'Xabier', 'Maddi'],
			'Junio' => ['Alex', 'Jokin'],
			'Julio' => ['Roberto','Carlos'],
			'Agosto' => ['Jefry','Andres'],
			'Septiembre' => ['Julen','Borja'],
			'Octubre' => ['Aitor', 'Iain'],
			'Noviembre' => ['Alex', 'Eneko'],
			'Diciembre' => ['Oier','Aitor','Jeremias']
		];

			echo "<table border 1>";
			foreach ($cumples as $meses => $personas) {
				echo '<th>'.$meses.'</th>';
				foreach ($personas as $persona) {
					echo '<td>'.$persona.'</td>';
				}
				echo '</tr>';
			}	
			echo "</table>";

			function nuevoNombre($nombre, $meses, $cumples){
			array_push($cumples[$meses], $nombre);
			return sizeof($cumples[$meses]);
			}
			echo "Este es numero de personas que estan registradas en el mes de diciembre despues de añadir una nueva: ". nuevoNombre('Urko', 'Junio', $cumples);
		?>
	
</body>
</html>
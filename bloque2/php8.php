<!DOCTYPE html>
<html>
<head>
	<title>Bloque 2 ejercicio 8</title>
</head>
<body>
	<?php
		function existeArchivo(){
			if (!file_exists('config.php'))
				throw new exception('El archivo "config.php" no ha sido encontrado');
		}
		existeArchivo();
	?>
</body>
</html>
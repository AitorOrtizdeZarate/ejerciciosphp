<?php 
session_start();
?>
<!doctype html>

<html>
	<head>
    <style>
        .agenda{
            border: solid;
            width: 20%;
            text-align: center;
        }
    </style>
		<title>
			DWES02 - Agenda
		</title>
	</head>
	<body>
		<?php
			//Funciones extra que he utilizado para gestionar la agenda

			function stringtoarray ($string_agenda,&$array_agenda) {
				//Convierte la agenda de datos (string) en un array asociativo
				$a=explode (";",$string_agenda);
				for($i=0; $i<count($a); $i++) {
					$array_agenda[$a[$i]]=$a[$i+1];
					$i++;
				}
				return true;
			}

			function arraytostring ($array_agenda) {
				//Convierte el array asociativo en una cadena de caracteres cada elemento separado por ;
				foreach($array_agenda as $key_nombre => $value)
				{
				  $string_agenda.=$key_nombre.";".$value.";";
				}
				//Quitamos el ultimo ';''
				$string_agenda=substr($string_agenda, 0, -1);
				return $string_agenda;
			}

		?>
		<?php
		//Creamos un array para almacenar los datos de la agenda
		$array_agenda=array();

		if (isset ($_POST['submit'])) {
			//Rellenamos el array con los datos recibidos en el campo oculto 'agenda' del formulario
			stringtoarray ($_POST['agenda'],$array_agenda);



			// REALIZAR COMPROBACIONES NECESARIAS

		}
		?>

		<form action="" method="post">
			<!-- Campo oculto para ir almacenando los elementos de la agenda-->
			<input name="agenda" type="hidden" value="<?php echo  arraytostring ($array_agenda) ?>"/><br>
			Nombre:<br>
			<input type="text" name="nombre" value="<?php echo $_POST[nombre] ?>"><br><br>
			Email:<br>
			<input type="text" name="email" value="<?php echo $_POST[email] ?>"><br><br>
			<button type="submit" name="submit" >Añadir contacto</button>
		</form>

		<h2>AGENDA</h2>
		<table>
		  
          
			  <?php
			  	//Llamamos a la funcion personas
				personas($_POST['nombre'], $_POST['email']);
				
				
				function personas ($nombre, $email){
					//Si el nombre y el email no estan vacios, añadiran un contacto a la agenda
					if(!empty($nombre) and !empty($email)){
						$_SESSION['agenda'][$nombre] = $email;
					//Aqui mostramos las personas que tenemos en la agenda
					foreach ($_SESSION['agenda'] as $nombre => $email){
							echo "<div class='agenda'>";
							echo $nombre."<br>";
							echo $email;
							echo "</div>";
						}
					}
					//Si el nombre esta escrito pero el email esta vacio, borrara la persona cuyo nombre este escrita
					if(isset($nombre) and empty($email)){
						unset($_SESSION['agenda'][$nombre]);
						foreach ($_SESSION['agenda'] as $nombre => $email){
							echo "<div class='agenda'>";
							echo $nombre."<br>";
							echo $email;
							echo "</div>";
						}
					}
				}

				
				
				


                ?>
                
		</table>

	</body>
</html>
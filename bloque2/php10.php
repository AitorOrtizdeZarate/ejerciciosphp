<!DOCTYPE html>
<html>
<head>
	<title>Bloque 2 ejercicio 10</title>
</head>
<body>
	<?php
		class Persona {
			private $dni = null;
			private $nombre = null;
			private $apellido = null;
			public function __construct($dni, $nombre, $apellido) {
				$this->setDni($dni);
				$this->setNombre($nombre);
				$this->setApellido($apellido);
			}
			public function setNombre($nombre) {
				$this->nombre = $nombre;
			}
			public function getNombre() {
				echo $this->nombre;
			}
			public function setApellido($apellido) {
				$this->apellido = $apellido;
			}
			public function getApellido() {
				echo $this->apellido;
			}
			public function setDni($dni) {
				$this->dni = $dni;
			}
			public function getDni() {
				echo $this->dni;
			}
			public function nombreCompleto() {
				echo 'Persona: '. $this->nombre.' '.$this->apellido;
			}
		}
		class User extends Persona {
			private $puntos = 0;
			public function setPuntos($puntos) {
				$this->puntos = $puntos;
			}
			public function getPuntos() {
				echo $this->puntos;
			}
			public function nombreCompleto() {
				echo 'User: '. $this->nombre.' '.$this->apellido;
			}
			public function comprobarPuntos() {
				echo $this->puntos >= 100 ? 'Tienes más de 100 puntos' : 'Tienes menos de 100 puntos';
			}
		}
	?>
</body>
</html>
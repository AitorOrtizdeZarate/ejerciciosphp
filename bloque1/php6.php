<!DOCTYPE html>
<html>
<head>
<title>Potencias</title>
</head>
<body>
<?php 
   $potencia = 3;
   echo "El numero de potencia es ".$potencia."<br>";

   for($i = 1 ;pow($potencia,$i) < 100; $i++){
       
       echo pow($i,$potencia)." - ";
   }
?>

</body>
</html> 
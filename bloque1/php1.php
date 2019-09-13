<!DOCTYPE html>
<html>
<head>
<title>Ejercicio 1</title>
</head>
<body>
<?php 
    $pisos = 5;
    $puertas = 4;
    
    echo "Aqui se muestran las viviendas de la comunidad";
    for ($i = 1; $i <= $pisos ; $i++){
        for ($j = 1; $j <= $puertas; $j++){
            echo "Piso $i - Puerta $j<br>";
        }
    }
    


?>

</body>
</html> 
<!DOCTYPE html>
<html>
<head>
<title>Parque</title>
</head>
<body>
<?php 
    $edad = rand(0,20);
    $altura = rand(70,200);
    /* el numero 0 significa que no va acompañado y el numero 1 significa que si va acompañado*/
    $comp = rand (0,1);

    if($edad > 10 and $altura > 120){
        echo "El joven de $edad años y $altura cm de altura es apto para entrar.";
    }
    else if($edad < 10 and $comp == 1){
        echo "El menor de $edad años puede entrar ya que va acompañado de un adulto";
    }
    else if ($edad < 10 and $comp == 0) {
    echo "El joven de $edad años y $altura cm de altura no puede entrar ya que no va acompañado";
    }
?>

</body>
</html> 
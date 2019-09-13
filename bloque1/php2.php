<!DOCTYPE html>
<html>
<head>
<title>Ejercicio 2</title>
</head>
<body>
<?php 
    $num1 = rand(0,100);
    $num2 = rand(0,100);
    $num3 = rand(0,100);

    echo "Numero 1 = <b>$num1</b>, Numero 2 = <b>$num2</b>, Numero 3 = <b>$num3</b><br>";

    if ($num1 > $num2 && $num1 > $num3){
        echo "El numero mas alto es $num1";
    }
    else if ($num2 > $num1 && $num2 > $num3){
        echo "El numero mas alto es $num2";
    }
    else if ($num3 > $num2 && $num3 > $num1){
        echo "El numero mas alto es $num3";
    }


?>

</body>
</html> 
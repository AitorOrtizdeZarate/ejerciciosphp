<!DOCTYPE html>
<html>
<head>
<title>Rangos de edad</title>
</head>
<body>
<?php 
    $edad = rand(1,100);
    echo "La edad de Matias es $edad<br>";

    if(0 < $edad && $edad < 10 ){
        echo "Esta edad pertenece al rango entre 0 y 10";
    }
    else if(11 < $edad && $edad < 20 ){
        echo "Esta edad pertenece al rango entre 10 y 20";
    }
    else if(21 < $edad && $edad < 30 ){
        echo "Esta edad pertenece al rango entre 20 y 30";
    }
    else if(31 < $edad && $edad < 40 ){
        echo "Esta edad pertenece al rango entre 30 y 40";
    }
    else if(41 < $edad && $edad < 50 ){
        echo "Esta edad pertenece al rango entre 40 y 50";
    }
    else if(51 < $edad && $edad < 60 ){
        echo "Esta edad pertenece al rango entre 50 y 60";
    }
    else if(61 < $edad && $edad < 70 ){
        echo "Esta edad pertenece al rango entre 60 y 70";
    }
    else if(71 < $edad && $edad < 80 ){
        echo "Esta edad pertenece al rango entre 70 y 80";
    }
    else if(81 < $edad && $edad < 90 ){
        echo "Esta edad pertenece al rango entre 80 y 90";
    }
    else if(91 < $edad && $edad < 100 ){
        echo "Esta edad pertenece al rango entre 90 y 100";
    }

?>

</body>
</html> 
<!DOCTYPE html>
<html>
<head>
<title>Multiplos de 3</title>
</head>
<body>
<?php 
    $num = rand(1,500);
    $num2 = 3;
    echo "El numero es $num <br>";

    $resto = $num%$num2;

    
        if ($resto == 0){
            echo "El numero $num es multiplo de 3";
        }
        else{
            echo "El numero $num <b>no</b> es multiplo de 3";
        }
    
?>

</body>
</html> 
<!DOCTYPE html>
<html>
<head>
    <title>Bloque 2 ejercicio 3</title> 
</head>
<body>

    <?php
        $randomarray = [];
        for ($i = 0; $i < 20; $i++){
            array_push($randomarray, rand(0,500));
            echo $randomarray[$i].' | ';
        }

        sort($randomarray);
echo '<br>';
        for ($i = 0; $i < sizeof($randomarray); $i++){
             if($i == 0){
            echo "<p style='color:blue;'> Este es el numero random mas pequeño: ".$randomarray[$i]."</p>";
            }
            else if($i == sizeof($randomarray)-1){
                echo "<p style='color:green'>Este es el numero random mas alto: ".$randomarray[$i]."</p>";
            }
        }

        echo "<p>Suma de todos los elementos del array: ".array_sum($randomarray)."</p>";
        echo "<p>Media de todos los elementos del array: ".array_sum($randomarray)/sizeof($randomarray)."</p>";
       

        
    ?>
</body>
</html>
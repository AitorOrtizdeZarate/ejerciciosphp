<!DOCTYPE html>
<html>
<head>
    <title>Bloque 2 ejercicio 2</title> 
</head>
<body>

    <?php
        $filas = rand(1,5);
        $columnas = rand(1,5);

        echo "<b>Filas: </b>".$filas."<br>";
        echo "<b>Columnas: </b>".$columnas."<br>";

        creartabla($filas,$columnas);

        function creartabla($filas, $columnas){
            echo "<table border 1>";
            for($i = 0; $i<$filas;$i++){
                echo "<tr>";
                    for($j = 0; $j<$columnas;$j++){
                        echo "<td>".$columnas."</td>";       
                    }
                echo "</tr>";     
            }
            echo "</table>";
        }

        
    ?>
</body>
</html>
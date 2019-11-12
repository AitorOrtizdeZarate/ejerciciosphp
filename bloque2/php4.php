<!DOCTYPE html>
<html>
<head>
    <title>Bloque 2 ejercicio 4</title> 
</head>
<body>

    <?php
        $string = "OrtizdeZarate Gomez Intxausti Belintxon";
        $array = explode(' ', $string);
        for ($i = 0; $i < count($array); $i++){
            echo "La longitud del string ".$array[$i]. " es: ".strlen($array[$i]).'<br>';
        }
       

        
    ?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
    <?php 
    function numero(){
        $n = rand(1,10);
        return $n;
    }
    function oper(){
        $n = rand(1,4);
        if ($n == 1){
            return $oper = "suma";
        }
        else if ($n == 2){
            return $oper = "resta";
        }
        else if ($n == 3){
            return  $oper = "division";
        }
        else if ($n == 4){
            return $oper = "multiplicacion";
        }
        return $oper;
    }
    function calc($oper,$n1,$n2){
        if($oper == "suma"){
            return $def = suma($n1,$n2);
        }
        else if($oper == "resta"){
            return $def = resta($n1,$n2);
        }
        else if($oper == "division"){
            return $def = division($n1,$n2);
        }
        else if($oper == "multiplicacion"){
            return $def = multiplicacion($n1,$n2);
        }
        return $def;
    }
    

    function suma($n1,$n2){
        return $n1 + $n2;
    }
    function resta($n1,$n2){
        return $n1 - $n2;
    }
    function division($n1,$n2){
        return $n1 / $n2;
    }
    function multiplicacion($n1,$n2){
        return $n1 * $n2;
    }
    $n1 = numero();
    $n2 = numero();
    $operacion = oper();
    echo "El primer numero es: $n1<br>";
    echo "El segundo numero es: $n2<br>";
    echo "La funcion seleccionada es: ".$operacion." <br>";
    echo "La respuesta es: ".calc($operacion,$n1,$n2);


	
	?>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
<title>Tienda online</title>
</head>
<body>
<?php 
    $total_compra = rand(0,100);
    echo "El precio total de la compra es ". $total_compra."<br>";
    $tipo_array = ["ropa", "Mascota"];
    $compra = rand (0,1);
    $tipo_compra = $tipo_array[$compra];

    if ($total_compra <=19){
        if ($tipo_compra == "ropa"){
            echo "Estas comprando ". $tipo_compra."<br>";
            echo "Los gastos de envío son 9 euros";
            $total_compra = $total_compra + 9;
        }
        else if ($tipo_compra == "Mascota"){
            echo "Estas comprando una ". $tipo_compra."<br>";
            echo "No se puede realizar el envío";
        }
    }
    else if ($total_compra >= 20 && $total_compra < 40){
        echo "Los gastos de envío son 9 euros";
        $total_compra = $total_compra + 9;
    }
    else if ($total_compra > 80){
        echo "Los portes de envio son gratis!";
    }

    if ($tipo_compra == "ropa"){
        $total = $total_compra * 1.21;
        echo "<br> Este es el precio final incuyendo el iva: ". $total;
    }
    else if ($tipo_compra == "Mascota"){
        $total = $total_compra * 1.1;
        echo "<br> Este es el precio final incuyendo el iva: ". $total;
    }

?>
</body>
</html> 
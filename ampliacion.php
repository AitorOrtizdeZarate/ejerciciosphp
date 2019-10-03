<!DOCTYPE html>
<html>
<head>
<title>Ampliacion</title>
</head>
<body>
<h3>Escribe un numero y te lo debolvemos en binario</h3>
<form>
<input type="number" name="decimal" ><br>
<input type="submit" value="Click">
</form>
<?php 
// Fucion que calcula el numero binario
function binario($decimal){
    $binario = decbin($decimal);
    return $binario;
}

$binario = binario($_GET['decimal']);
$decimal = $_GET['decimal'];
if (isset($decimal))
echo "El numero <font style='color : red'>".$decimal."</font> en binario es <font style='color:blue'>".$binario."</font>";

?>


</body>
</html> 
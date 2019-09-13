<!DOCTYPE html>
<html>
<head>
<title>Array</title>
</head>
<body>

<?php 
    $a = array(0,1,2,3,4,5);
    $suma = 0;
    for ($i = 0; $i <= 5; $i++){
        $suma += $a[$i];
    }
    echo($suma);

?>


</body>
</html> 
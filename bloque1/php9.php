<!DOCTYPE html>
<html>
<head>
<title>Comision</title>
</head>
<body>
<?php 
    $comision = rand(0,50000);
    echo "La comision es ". $comision."<br>";

    if ($comision < 10000){
        echo "La comision vendida a sido el 5%";
    }
    else if($comision >= 10000 && $comision < 20000){
        echo "La comision vendida a sido el 8%";
    }
    else if($comision >= 20000 && $comision < 40000){
        echo "La comision vendida a sido el 10%";
    }
    else if($comision >= 40000){
        echo "La comision vendida a sido el 13%";
    }

?>
</body>
</html> 
<!DOCTYPE html>
<html>
<head>
<title>2 array</title>
</head>
<body>

<?php
    $array1 = [];
    $array2 = [];
    $num;
    $factorial = 1;
    
    for ($i = 0; $i < 10; $i++){
        $array1[$i] = $i;
    }
    foreach ($array1 as $final1){
        echo "$final1 ";
        
    }
    echo "<br>";
    for ($i = 0; $i < count($array1); $i++) {
        $array2[$i] = factorial($array1[$i]);
    }
    function factorial($num) {
        $num2 = 1;
        for($i = 1; $i <= $num; $i++){
            $num2 = $num2 * $i;
        }
        return $num2;
    }
    
    
    
    foreach ($array2 as $final2){
        echo "$final2 ";
        
    }
	?>


</body>
</html> 
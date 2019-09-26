<!DOCTYPE html>
<html>
<head>
<title>Potencias</title>
</head>
<body>
<?php 
  
  for($i = 1; $i<=10;$i++){
    $numero = rand(1,10);
  if($numero%2 == 0){
      $par = $numero/2;
      echo $par." - ";
  }
  else{
      $impar = ($numero*3)+1;
      echo $impar." - ";
  }
}


?>

</body>
</html> 
<!DOCTYPE html>
<html>
<head>
<title>Piramide</title>
</head>
<body>
<?php 
$limit = 15;
for($i = 1; $i < $limit; $i ++) {
    $stars = str_repeat('*', ($i - 1) * 2 + 1);
    $space = str_repeat(' ', $limit - $i);
    echo $space . $stars . '<br/>';
}
?>

</body>
</html> 
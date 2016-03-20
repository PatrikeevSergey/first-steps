<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Передача переменных</title>
</head>

<body>

<?php 
$a=$_GET['a'];
$b=$_GET['b'];

$c=$a+$b;
print_r($c);
echo "<br>Сумма переменных через адресную спросу:$c";




echo "<br><a href='get.php?a=20&b=20'Новые значение></a>" 
?>

</body>
</html>
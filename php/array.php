<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Массивы</title>
</head>

<body>
<?php 
/* Первый способ создания массива*/
$name[0]="Саша";
$name[1]="Маша";
$name[2]="Ваня";
$name[3]="Аня";
$name[4]="Костя";
echo "<br>$name[3]<br>";
/* второй способ создания массива*/
$mas = array (0=>"Саша",1=>"Маша", 2=>"Ваня", 3=>"Аня", 4=>"Костя");
print_r(array_unique($mas));

?>
</body>
</html>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Констуркция if-else</title>
</head>

<body>
<?php 
$a = 3;
$b = 3;
$c = 7;
$d = 7;

$cat = "juli";
$dog = "hard";

if ($a == $b and $c == $d)
{
	echo "Все переменные равны";
	
	if ($cat != $dog)
{
	echo "<br>В переменных \"cat\" и \"dog\" содержатся разные имена<br>"; 
	}

}

else
{
	echo "Переменные  не равны";
	}




?>
</body>
</html>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>function</title>
</head>

<body>
<?php

echo "<br>";
function square ($a)
{
	$result = $a*$a;
	return $result;

	}
	
	
	
	
	$new = 120;
echo "Квадрат $new равен - "; 
$h=square ($new);
echo  $h;

/*function link ($link,$title)
{
	echo "<a href='$link>' $title</a>";
}
	link('http://yandex.ru', 'Яндекс');*/
	
	$name[]="Александр";
	$name[]="Наполеон";
	$name[]="Джорж";

/*exit ("<p> Работа программы завершена на 42 строке" );*/
/*$h2=count($name);*/
echo "<br>В массиве name найдено " .count($name)." элемента";
$w = " ноутбук ";


$w = trim($w);
echo $w;

?>
</body>
</html>
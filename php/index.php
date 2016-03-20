<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Первая PHP страница</title>
</head>
<body>
<?
$name = "Сергей работает в фирме \"ООО Эверест\"";
$age = 21;
echo "$name";
echo "<p align='center'>Автомобиль</p>";
print "<br>$age";
echo "<br>Моего друга зовут - $name , ему $age год"; 

$n = 10;
$c = $age + $n;
$e = $age - $n;
$f = $age * $n;
$g = $age / $n;

echo "<br>Сергею через 10 лет будет $c год";
echo "<br>$e<br>";
echo "<br>$f<br>";
echo "<br>$g<br>";
$h = $age.$n; 
echo "<br>$h<br>";
/*echo "<br>Точка означает престыковка!!!!!<br>";*/
/*
$z = isset($z);

echo $z;*/


/*Функция, проверят есть ли переменная*/
if (isset($ee))
{
	echo "Переменная с существует и ее значение $c";
	}
	else 
	{
		echo "Переменной ee не существует";
		 }




/*функция, уничтожения переменной*/
$v = 10;
unset($v);
echo "<br>$v";

		 
?>
</body>
</html>
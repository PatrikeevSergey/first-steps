<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>цикл while</title>
</head>
<body>
<?php 
$a=0;
while ($a<=10)
{
	echo "$a<br>\n ";
	$a=$a+1;
	}
	
$sum=0; 
$i=1;
do
{ 
$sum = $sum + $i;
$i++;
}
 
while ($i<=5);

echo "Сумма всех чисел от 1 до 5 = $sum";
?> 


</body>
</html>
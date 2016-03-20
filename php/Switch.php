<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Конструкция Switch</title>
</head>

<body>
<?php
$sposob="Почта";
switch ($sposob)
{
	case "Банк":
	echo "<p> Чтобы оплатить через банк......";
	break; 
	
	case "Почта":
	echo "<p> Чтобы оплатить через Почту......";
	break;  
	
	case "Western Union":
	echo "<p> Чтобы оплатить через Western Union......";
	break; 
	
	default:
	echo "<p> Вы не выбрали способ оплаты";
	break;	
	}


 ?>


</body>
</html>
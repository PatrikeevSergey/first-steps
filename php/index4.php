<html>
<head>
<center>
  <h1>Задание 4.1</h1>
<TITLE>лабораторная работа</TITLE>
<center>
<?php
$mas=array("Александр","Вася","Дмитрий","Андрей","Сергей","Олег","Алексей","Евгений");
print_r(array_unique($mas));
?>
 <h1>Модуль 4. Задание 4.1a</h1>
<?php
$pervmass = array("Александр","Вася","Дмитрий","Вася","Вася","Олег","Алексей");
$toomass = array_keys($pervmass, "Вася");
echo "Вася входит в массив ". count($toomass) . " раз(а):<br>";
foreach ($toomass as $val) 
{
echo "под номером $val <br>";
}

?>
<h1>Модуль 4. Задание 4.1c</h1>
<?php
$langs = array("Александр","Вася","Дмитрий","Андрей","Вася","Олег","Алексей","Евгений");
$avd = array_unique($langs);
print_r($avd);
$keys=array_keys($avd,"Вася");
foreach ($keys as $key) {
	echo " <br>Индекс Васи $key <br>";
}
unset($avd[1]);
print_r($avd);
?>
<h1>Модуль 4. Задание 4.1d</h1>
<?php
$langs = array("Александр","Вася","Дмитрий","Андрей","Вася","Олег","Алексей","Евгений");
$avd = array_unique($langs);
print_r($avd);
$keys=array_keys($avd,"Вася");
foreach ($keys as $key) {
	echo " <br>Индекс Васи $key <br>";
}
unset($avd[1]);
print_r($avd);
sort($avd);
?>
<br>
<?php
print_r($avd);
?>
<h1>Модуль 4. Задание 4.2a</h1>
<?php
$mass = array("Александр","Вася","Дмитрий","Андрей","Вася","Олег","Алексей");
$sub_mass=array_slice($mass,2,2);
$sub=array_slice($mass,-3,3);
$sub1=array_slice($mass,0,-1);
$sub2=array_slice($mass,-4,-2);
print_r($sub2);
?>
<h1>Модуль 4. Задание 4.2b</h1>
<?php
$mass = array("Александр","Вася","Дмитрий","Андрей","Вася","Олег","Алексей","Игорь");
$doubles=array_chunk($mass,3);
foreach($doubles as $k=>$tables) {
echo"За столиком номер $k сидят: <ul>";
foreach ($tables as $pers)
     echo "<li>   $pers";
    echo"</ul>";   }
?>
<h1>Модуль 4. Задание 4.3</h1>
<?php
$mass = array (
   "Россия"=>array("РнД","Москва","СПБ","Томск"),
   "Германия"=>array("Берлин","Мюнхен","Гамбург","Дрезден"),
   "Италия"=>array("Рим","Ливерпуль","Венеция","Милан"));
foreach ($mass as $type=>$val) {
echo("<h2>$type</h2>". "<br>"   );
foreach($val as $city){
echo"<I>$city,</I>";
}
}

?>
<h1>Модуль 4. Задание 4.4</h1>
<?php
$sotrudniki=array(
		"names" => array("Александр","Алексей","Николай","Олег"),
			"surnames" => array("Новиков","Бодров","Хмельницкий","Нестеров"),
			"age" => array(35,28,28,44),
			"address" => array("ул. Ленина 99","пр. Ворошиловский 61","ул. Социалистическая 25","ул. Петровка 11"),
			"phone" => array("125-89-63","256-89-63","100-89-63","330-80-63"),
			"pay" => array(5000,5500,10000,4998)
);
?>
<br>
<br>
<table bordercolor=grey border="2">
<tr>
<td><B>Имя</B></td>
<td><B>Фамилия</B></td>
<td><B>Возраст</B></td>
<td><B>Адрес</B></td>
<td><B>Телефон</B></td>
<td><B>Выручка за день</B></td>
</tr>
			
<?php
for($n=0;$n<=3;$n++)
{
echo "<tr>";
foreach ($sotrudniki as $val)
{
echo "<td>$val[$n]</td>";
}
echo "</tr>";				
}
?>				
</table>
</Font>
<?php
$sum=0;
foreach ($sotrudniki["pay"] as $money)
$sum=$sum+$money;
echo "<B>Суммарная выручка за день: $sum</B>";
?>
</center>
</body>
</HEAD>
</html>

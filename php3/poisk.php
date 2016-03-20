<?php 
/* Определяем значения переменным */ 
$hostname="localhost"; 
$username="root"; 
$password=""; 
/* Имя базы данных */ 
$dbName="new_baza"; 
/* Имя таблицы */ 
$usertable="new_table"; 
/* Создать соединение с MySql*/ 
MYSQL_CONNECT($hostname,$username,$password) OR DIE("Не могу подсоединиться"); 
/* Выбор БД */ 
MYSQL_SELECT_DB($dbName) or die("Не могу выбрать БД"); 
/* Введение информации в БД */
$query="select * from $usertable where family like '{$_GET['family']}%'"; 
$result=mysql_query($query); 
/* Сколько нашлось таких сотрудников? */ 
$number=mysql_numrows($result); 
/* Распечатка выбранных сотрудников */ 
$i=0; 
if ($number == 0) 
{ 
print "Нет данных о $user_name в БД <br>"; 
} 
elseif ($number > 0) 
{ 
while ($i < $number) 
{ 
/* Присвоение переменным значений полей user_name, phone, img для i-й 
строки */ 
$user_name=mysql_result($result,$i,"name"); 
$family=mysql_result($result,$i,"family");
$otchestvo=mysql_result($result,$i,"otchestvo");
$e_mail=mysql_result($result,$i,"e-mail");
$phone=mysql_result($result,$i,"phone"); 
$town=mysql_result($result,$i,"town");
$city=mysql_result($result,$i,"country"); 
/* Вывод найденных значений */ 
print "<u> Имя:</u> <br>"; 
print "$user_name <br><br>";
print "<u> Фамилия:</u> <br>";
print "$family <br><br>";
print "<u> Отчество:</u> <br>";
print "$otchestvo <br><br>";
print "<u> e-mail:</u> <br>";
print "$e_mail <br><br>"; 
print "<u> Телефон: </u><br>"; 
print "$phone <br><br>";
print "<u> Город:</u> <br>";
print "$town <br><br>";
print "<u> Страна:</u> <br>";
print "$city <br><br>"; 
$i++; 
print "<hr>"; 
} 
} 
?> 


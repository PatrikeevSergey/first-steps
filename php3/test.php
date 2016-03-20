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
$query="INSERT INTO $usertable VALUES ('{$_GET['name']}','{$_GET['family']}','{$_GET['otchestvo']}', '{$_GET['e-mail']}' ,'{$_GET['phone']}', '{$_GET['town']}','{$_GET['city']}')"; 
MYSQL_QUERY($query); 
/* Закрыть соединение */ 
MYSQL_CLOSE(); 
print "Запись введена в БД! <br>"; 
?> 

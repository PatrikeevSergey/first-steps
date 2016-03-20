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
$query="delete from $usertable where name='{$_GET['name']}' and family='{$_GET['family']}' "; 
mysql_query($query); 
print "Запись удалена <br>"; 
?> 




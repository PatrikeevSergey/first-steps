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
$query="select * from $usertable where name='{$_GET['name']}' and family='{$_GET['family']}' and otchestvo='{$_GET['otchestvo']}'"; 
$result=mysql_query($query); 
/* Определение существования выбранной записи */ 
$number=mysql_numrows($result); 
if ($number==0) 
{ 
print "Нет такой записи!<br>"; 
} 
else 
{ 
/* Если запись выбрана из базы данных, вывести все ее поля в форму для 
редактирования и удалить ее */ 
$name1=mysql_result($result,0,"name");
$family=mysql_result($result,0,"family");
$otchestvo=mysql_result($result,0,"otchestvo");
$e_mail=mysql_result($result,0,"e-mail");    
$phone=mysql_result($result,0,"phone"); 
$town=mysql_result($result,0,"town");
$country=mysql_result($result,0,"country");  
/* Удаление записи */ 
$query="delete from $usertable where name='{$_GET['name']}'and family='{$_GET['family']}' and otchestvo='{$_GET['otchestvo']}'"; 
$result=mysql_query($query); 
/* Создание формы для редактирования */ 
print "<form method=get action='form5.php'>";
print "<br><b>Введите Ваше имя:</b>"; 
print "<br><input name='name1' value='$name1' size=30>";
print "<br><b>Введите Вашу фамилию:</b>";
print "<br><input name='family' value='$family' size=30>";
print "<br><b>Введите Ваше отчество:</b>";
print "<br><input name='otchestvo' value='$otchestvo' size=30>";
print "<br><b>Введите Ваш e-mail:</b>";
print "<br><input name='e-mail' value='$e_mail' size=30>";   
print "<br><br><b>Введите номер вашего телефона:</b>"; 
print "<br><input name='phone' value='$phone' size=10>"; 
print "<br><br><b>Введите город, в котором живете:</b>"; 
print "<br><input name='town' value='$town' size=20>";
print "<br><b>Введите страну, в которой живете:</b>";
print "<br><input name='country' value='$country' size=30>";  
print "<br><br><input type='submit' value='Редактировать'>"; 
print "</form>"; 
} 
?> 



<?php 
/* ���������� �������� ���������� */ 
$hostname="localhost"; 
$username="root"; 
$password=""; 
/* ��� ���� ������ */ 
$dbName="new_baza"; 
/* ��� ������� */ 
$usertable="new_table"; 
/* ������� ���������� � MySql*/ 
MYSQL_CONNECT($hostname,$username,$password) OR DIE("�� ���� ��������������"); 
/* ����� �� */ 
MYSQL_SELECT_DB($dbName) or die("�� ���� ������� ��"); 
/* �������� ���������� � �� */
$query="INSERT INTO $usertable VALUES ('{$_GET['name']}','{$_GET['family']}','{$_GET['otchestvo']}', '{$_GET['e-mail']}' ,'{$_GET['phone']}', '{$_GET['town']}','{$_GET['city']}')"; 
MYSQL_QUERY($query); 
/* ������� ���������� */ 
MYSQL_CLOSE(); 
print "������ ������� � ��! <br>"; 
?> 

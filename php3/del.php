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
$query="delete from $usertable where name='{$_GET['name']}' and family='{$_GET['family']}' "; 
mysql_query($query); 
print "������ ������� <br>"; 
?> 




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
$query="select * from $usertable where family like '{$_GET['family']}%'"; 
$result=mysql_query($query); 
/* ������� ������� ����� �����������? */ 
$number=mysql_numrows($result); 
/* ���������� ��������� ����������� */ 
$i=0; 
if ($number == 0) 
{ 
print "��� ������ � $user_name � �� <br>"; 
} 
elseif ($number > 0) 
{ 
while ($i < $number) 
{ 
/* ���������� ���������� �������� ����� user_name, phone, img ��� i-� 
������ */ 
$user_name=mysql_result($result,$i,"name"); 
$family=mysql_result($result,$i,"family");
$otchestvo=mysql_result($result,$i,"otchestvo");
$e_mail=mysql_result($result,$i,"e-mail");
$phone=mysql_result($result,$i,"phone"); 
$town=mysql_result($result,$i,"town");
$city=mysql_result($result,$i,"country"); 
/* ����� ��������� �������� */ 
print "<u> ���:</u> <br>"; 
print "$user_name <br><br>";
print "<u> �������:</u> <br>";
print "$family <br><br>";
print "<u> ��������:</u> <br>";
print "$otchestvo <br><br>";
print "<u> e-mail:</u> <br>";
print "$e_mail <br><br>"; 
print "<u> �������: </u><br>"; 
print "$phone <br><br>";
print "<u> �����:</u> <br>";
print "$town <br><br>";
print "<u> ������:</u> <br>";
print "$city <br><br>"; 
$i++; 
print "<hr>"; 
} 
} 
?> 


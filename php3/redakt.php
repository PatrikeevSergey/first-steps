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
$query="select * from $usertable where name='{$_GET['name']}' and family='{$_GET['family']}' and otchestvo='{$_GET['otchestvo']}'"; 
$result=mysql_query($query); 
/* ����������� ������������� ��������� ������ */ 
$number=mysql_numrows($result); 
if ($number==0) 
{ 
print "��� ����� ������!<br>"; 
} 
else 
{ 
/* ���� ������ ������� �� ���� ������, ������� ��� �� ���� � ����� ��� 
�������������� � ������� �� */ 
$name1=mysql_result($result,0,"name");
$family=mysql_result($result,0,"family");
$otchestvo=mysql_result($result,0,"otchestvo");
$e_mail=mysql_result($result,0,"e-mail");    
$phone=mysql_result($result,0,"phone"); 
$town=mysql_result($result,0,"town");
$country=mysql_result($result,0,"country");  
/* �������� ������ */ 
$query="delete from $usertable where name='{$_GET['name']}'and family='{$_GET['family']}' and otchestvo='{$_GET['otchestvo']}'"; 
$result=mysql_query($query); 
/* �������� ����� ��� �������������� */ 
print "<form method=get action='form5.php'>";
print "<br><b>������� ���� ���:</b>"; 
print "<br><input name='name1' value='$name1' size=30>";
print "<br><b>������� ���� �������:</b>";
print "<br><input name='family' value='$family' size=30>";
print "<br><b>������� ���� ��������:</b>";
print "<br><input name='otchestvo' value='$otchestvo' size=30>";
print "<br><b>������� ��� e-mail:</b>";
print "<br><input name='e-mail' value='$e_mail' size=30>";   
print "<br><br><b>������� ����� ������ ��������:</b>"; 
print "<br><input name='phone' value='$phone' size=10>"; 
print "<br><br><b>������� �����, � ������� ������:</b>"; 
print "<br><input name='town' value='$town' size=20>";
print "<br><b>������� ������, � ������� ������:</b>";
print "<br><input name='country' value='$country' size=30>";  
print "<br><br><input type='submit' value='�������������'>"; 
print "</form>"; 
} 
?> 



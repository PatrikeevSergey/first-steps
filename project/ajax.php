<?php

/* ����-���������� �������� AJAX */

//$headers  = "Content-type: text/html; charset=windows-1251 \r\n"; 

//���������� ���� ������������
include_once 'config.php';

//���������� ���� � ���������
include_once 'mail.php';

//��������� ���� ����� �� ������������ ����������
if( !(isset( $_POST['last_name']) && $_POST['last_name']!='') )
	$errors[]='last_name';

if( !(isset( $_POST['name']) && $_POST['name']!='') )
	$errors[]='name';

if( !(isset( $_POST['company']) && $_POST['company']!='') )
   $errors[]='company';

if( !(isset( $_POST['mail']) && $_POST['mail']!='') || !checkEmail($_POST['mail']))
	$errors[]='mail';

if( !(isset( $_POST['phone']) && $_POST['phone']!='') ) 
 $errors[]='phone';

echo (checkEmail('fsdf@ssdf.dsf'));
?> 
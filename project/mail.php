<?php 

/* ����, ���������� �������� ������� ������� */

//���������� ���� ������������
include_once 'config.php';
include_once 'ajax.php' ;

//������� �������� ������ �� ������������
/*function checkEmail($mail){
    if (!preg_match("/^[a-zA-Z0-9\.\-\_]+@[a-zA-Z0-9\.\-\_]+\.[a-zA-Z0-9]+$/", $mail))
       return false;
    else
       return true;
}*/

//�������� ���������. $message - ������, ���� ������ ����������
function SendMail($address, $message=''){
	if(is_array($message)){
		$message=
		'������ ���������: 
		���, �������: '.$message['name'].' '.$message['last_name'].'
		��������: '.$message['name'].' '.$message['company'].'
		Email: '.$message['name'].' '.$message['mail'].'
		�������: '.$message['name'].' '.$message['phone'].'
		';
	}

	mail(Config::email,'����� � ����� Marketimg!', $message);
}

?> 
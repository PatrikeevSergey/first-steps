<?php 

/* Файл, содержащий основные функции системы */

//Подключаем файл конфигурации
include_once 'config.php';
include_once 'ajax.php' ;

//Функция проверки адреса на корректность
/*function checkEmail($mail){
    if (!preg_match("/^[a-zA-Z0-9\.\-\_]+@[a-zA-Z0-9\.\-\_]+\.[a-zA-Z0-9]+$/", $mail))
       return false;
    else
       return true;
}*/

//Отправка сообщения. $message - строка, либо массив параметров
function SendMail($address, $message=''){
	if(is_array($message)){
		$message=
		'Данные заказчика: 
		Имя, фамилия: '.$message['name'].' '.$message['last_name'].'
		Компания: '.$message['name'].' '.$message['company'].'
		Email: '.$message['name'].' '.$message['mail'].'
		Телефон: '.$message['name'].' '.$message['phone'].'
		';
	}

	mail(Config::email,'Заказ с сайта Marketimg!', $message);
}

?> 
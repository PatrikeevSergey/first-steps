<?php
$counter = 0;
if(isset($_COOKIE['counter'])) // ищет проверяет есть ли куки
    $counter = $_COOKIE['counter'];    //Если соответствующие данные 
	//передавались через куки, сохраняйте их в эту переменную
$counter++;// количество заходов, тиме ласт время захода
if(isset($_COOKIE['time_last_visit']))
    $time_last_visit = $_COOKIE['time_last_visit'];
setcookie("counter", $counter); //сеткоки удаляет куки
setcookie("time_last_visit", date("d-m-Y H:i:s"));
if($counter == 1)
    echo "Добро пожаловать!";
else{
    echo "Вы пришли $counter раз!<br>";
    echo "Последнее посещение $time_last_visit";
}

?>

<?php
$counter = 0;
if(isset($_COOKIE['counter'])) // ���� ��������� ���� �� ����
    $counter = $_COOKIE['counter'];    //���� ��������������� ������ 
	//������������ ����� ����, ���������� �� � ��� ����������
$counter++;// ���������� �������, ���� ���� ����� ������
if(isset($_COOKIE['time_last_visit']))
    $time_last_visit = $_COOKIE['time_last_visit'];
setcookie("counter", $counter); //������� ������� ����
setcookie("time_last_visit", date("d-m-Y H:i:s"));
if($counter == 1)
    echo "����� ����������!";
else{
    echo "�� ������ $counter ���!<br>";
    echo "��������� ��������� $time_last_visit";
}

?>

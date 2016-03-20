<?php
function Login($username, $remember)
{
if ($username == '')
return false;
$_SESSION['username'] = $username;
if ($remember )
setcookie('username', $username, time() + 3600 * 24 * 7);
return true;
}
function Logout()
{
setcookie('username', "", time()-1);
unset($_SESSION['username']);
}
session_start();
$enter_site = false;
Logout();
if (count($_POST) > 0)
	$enter_site = Login($_POST['username'], $_POST['remember'] == 'on');
if ($enter_site)
{
header("Location: 7-2-a.php");
	exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
<title>Вход на сайт</title>
</head>
<body>
<h1>Вход на сайт</h1>
<form action="" method="post">
Введите имя 
<br/>
<input type="text" name="username" />      
<br/>
<input type="checkbox" name="remember" /> Запомнить меня
<br/>
<input type="submit" value="Войти" />
</form>
</body>
</html>
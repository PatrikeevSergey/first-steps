<?php
session_start();
if (!isset($_SESSION['username']) && isset($_COOKIE['username']))
	$_SESSION['username'] = $_COOKIE['username'];
$username = $_SESSION['username'];
if ($username ==null)
{
	header ("Location: 7-2.php");
	exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
<title>Страница "А"</title>
</head>
<body>
<h1>Страница "А"</h1>
<b>А</b> и <a href="7-2-b.php">Б</a> сидели на трубе
<br/>
<br/>
Вы вошли как <b><?php echo $username;?></b> | <a href = "7-2.php">Выход</a>
</body>
</html>
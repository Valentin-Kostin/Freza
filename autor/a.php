<?php

//Точка входа

session_start ();

// Если в контексте сессии не установлено имя пользователя, то пытаемся взять его из куки

if (!isset ($_SESSION['username']) && isset($_COOKIE['username']))
	$_SESSION['username'] = $_COOKIE['username'];

// Ещё раз ищем имя пользователя в контексте сессии
$username = $_SESSION['username'];

// неавторизованных пользователей отправляем на страницу регистрации.
if ($username == null)
{
	header ("Location: login.php");
	exit();
}
?>

<Html>
<head>
    <title>Страница А</title>
</head>
<body>
    <h1>Страница "А"</h1>
	<b>А</> и <a href="b.php">Б</a> сидели на трубе.
	<br/>
	<br/>
	Вы вошли как <b><?php echo $username; ?></b> | <a href="login.php">выход<a/>
</body>
</html>

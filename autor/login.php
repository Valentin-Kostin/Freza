<?php
//
// параметр $username - имя пользователя
// параметр $remember - булева переменная, указывающая на то, 
// что желает ли пользователь быть автоматически авторизованным
// при следующих заходах на сайт.
//
$username='';
function Login ($username, $remember)
{
	//имя не должно буть пустой строкой.
	if ($username == '')
		return false;
	// Запоминаем имя в сессии.
	$_SESSION['$username'] = $username;
	
	// и в cookies, если пользователь пожелал запомнить его (на неделю).
	if ($remember)
		setcookie ('username', $username, time () + 3600*24*7);
	
	//успешная авторизация.
	return true;
}

// Сброс авторизации.

function Logout()
{
	//Делаем cookies устаревшими (единственный способ их удаления).
	setcookie ('username', '', time () - 1);
	
	// Сброс сессии.
	unset($_SESSION['username']);
}

// Точка входа

session_start();
$enter_site = false;

//Поподая на страницу login.php, авторизация сбрасываеться.
Logout();

//Если массив POST не пуст, значит, обрабатываем отправку формы.
if (count ($_POST) > 0)
	$enter_site = Login ($_POST['username'], $_POST['remember'] == 'on');

// Если авторизация пройдена, переадресуем пользователя на одну из страниц.

if ($enter_site)
{
	header ("Location: a.php");
	exit ();
}
?>	

<html>
<head>
    <title>Вход на сайт</title>
</head>

<body>

    <h1>Вход на сайт</h1>
	<form action="" method="post">
	
	    Введите имя:
		<br/>
		<input type="text" name="username"/>
		<br/>
		<input type="checkbox" name="remember" />
		<br/>
		<input type="submit" value="Войти" />
		
	</form>

</body>
</html>		

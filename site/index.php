<?php
//запись в файл информации о посещении страницы.
$f = fopen ('visits.txt', 'a+');
fwrite($f, date('Y-m-d H:i:s') . "\n");
fwrite($f, $_SERVER['REMOTE_ADDR'] . "\n");
fwrite($f, $_SERVER['HTTP_REFERER'] . "\n");
fclose($f);
$lines = file ('visits.txt');
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=windows-1251">
	<title>Наш сайт</title>
</head>
<body>
	<a href="../index.php">На главную</a>
    <h1>Это главная страница сайта</h1>
	Мы <a href="a.php">следим</a> за её посещаемостью!
	<br/><br/>
	На нас ссылаються два сайта: <a href="a.php">раз</a> и  <a href="a.php">два</a> 
	<br/>
	<h2>Журнал посещении<h/>
	<table border="1">
	<tr>
	   <td>время</td>
	   <td>IP-адресс</td>
	   <td>Откуда</td>
	</tr>
	<?php
	   $n = count($lines);
	   for ($i = 0; $i < $n; $i+=3)
	   {
		   echo '<tr>';
		   echo '<td>' . $lines[$i+0] . '<td>';
		   echo '<td>' . $lines[$i+1] . '<td>';
		   echo '<td>' . $lines[$i+2] . '<td>';
		   echo '</tr>';
	   }
	   ?>
</body>
</html>
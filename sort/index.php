<?php

// Главное меню.
$menu = array(
     1 => 'Главная',
	 2 => 'О компании',
	 3 => 'Контакты',
	 );
	 
// Содержание страниц.
$content = array(
     1 => 'Это приветственный текст главной страницы сайта',
	 2 => ' Здесь информация о компании',
	 3 => 'На этой странице телефоны и адреса',
	 );
$page_id = null;

// Если не указан - покажем главную.
if ($page_id == null)
	$page_id = 1;

// Номер текущей страницы.
$page_id = $_GET ['page_id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>	    
    <head>
	    <meta content="text/html; sharset=Windows-1251" http-equiv="content-type">
	    <title>Сайт-визитка</title>
	</head>
	<body>
	    <!--Меню: начало -->
		<?php
		    foreach ($menu as $key =>$value)
			{
				if ($key == $page_id)
				{
					echo "<b>$value</b>";
				}
				else
				{
				    echo "<a href=\"index.php?page_id=$key\">$value</a>";
				}
				echo '&nbsp; ';
			}
		?>
		<!-- Меню: конец -->
		<br/>
		<br/>
		<!-- Содержимое начало-->
		<?php echo $content[$page_id];?>
		<!-- Содержимое конец-->
	</body>
</html>
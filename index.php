<html>
    <head>
        <meta charset="UTF-8">
		<link href="style.css" rel="stylesheet" type="text/css">
        <title>pricol</title>		
    </head>
    <body>	    
		<form action="index.php" method="POST">
		<input type="number" name="numb" size="10">
		<input type="submit" value="Введите размер">
		<a href="formula3.php">Формула1</a> 
		<a href="formula4.php">Формула2</a> 
		<a href="1lesson/index.php">урок 1</a>
		<a href="2convec/convertor.php">Конвертор</a>
		<a href="3foto">Фото3</a>
		<a href="5">Фото5</a>
		<a href="autor/login.php">Авторизация</a>
		<a href="site">Логирование</a>
		<a href="sort">Сорт</a><br/>
		<a href="Stepik">Stepik</a>
		<a href="Stepik">Stepik2</a>
        <table>
<?php
    $n= $_POST['numb'];
		for ($s=1; $s<=$n; $s++)
		{
			echo "<tr>";
			for ($j=1; $j<=$n; $j++)
			{
				for ($i=0; $i<=5; $i++) 
				{
					$k = mt_rand (0, 15);
					$a[$i] = dechex($k);			 		
				}
				//print_r ($a);
				//echo 'a<br>';							
			    $b = $a[0].$a[1].$a[2].$a[3].$a[4].$a[5];
				//print_r ($b);
				//echo "$b<br>";
				echo "<td bgcolor=#$b></td>";	    
			}
			echo "</tr>";
		}
		
?>		
		</table>
    </body>
</html>

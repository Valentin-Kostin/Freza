<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Конвертор</title>
    </head>
    <body>
        <h1>Преобразование из дюймов в миллиметры</h1>
		<?php 
            $ins = 1/8;
			$cents = $ins * 25.4;
            $ins2 = 27;
			$cents2 = $ins2 * 25.4  			
			?>
        <p><?php echo $ins ?> дюймов = <?php echo $cents ?> мм.</p>
		<p><?php echo $ins2 ?> дюймов = <?php echo $cents2 ?> мм.</p>
    </body>
</html>
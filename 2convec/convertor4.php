<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Конвертор</title>
    </head>
    <body>
        <h1>Преобразование из дюймов в миллиметры</h1>
        <form action="convertor4.php" method="post">
            <p>Величина в дюймах:
            <input type="text" name="inches" size="10"></p>
            <p><input type="submit" value="Преобразовать"></p>
        </form>
		<?php
		    require_once 'libraly.php';
		    if (isset($_POST['inches']))
			{
			    $ins = $_POST['inches'];			
			    $ins = str_replace (",", ".", $ins);		
			    $ins = (double) $ins;			
			    if ($ins>0)
			    {
			        $milim = $ins*25.4;
					$ins_ending = case_ending($ins);
					$milim_ending = case_ending ($milim);
					echo "<p> {$ins} дюйм{$ins_ending} = {$milim} миллиметр{$milim_ending}.</p>";
				}
				else
				echo  'Величина в дюймах должна быть больше нуля.</р>' ;
			} 		    
	    ?>
    </body>
</html>
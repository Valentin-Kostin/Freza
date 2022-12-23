<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Конвертор</title>
    </head>
    <body>
        <h1>Преобразование из дюймов в миллиметры</h1>
		 <?php
		 require_once 'libraly.php';
         $aIns = [20, 24, 27, 32, 45, 19, 80];
         $cnt = count($aIns);
		 for ($i = 0; $i < $cnt; $i++)
		 {	
	        $amil = $aIns[$i]*25.4;
			$ins_ending = case_ending($aIns[$i]);
			$milim_ending = case_ending ($amil);
		    echo "<p>$aIns[$i] дюйм{$ins_ending} = $amil миллиметр{$milim_ending}. </p>";
		 } 
		 ?>
    </body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html> 
    <head>
	     <meta charset="UTF-8">
	     <title>Расчет скорости подачи</title>
	</head>
	<body>
	    <h1>Расчет скорости подачи</h1>
        <form action="formula.php" method="POST">
            <p>Диаметр фрезы:
            <input type="number" name="diam" size="20"></p>
			<p>Число зубьев:
			<input type="number" name="zub" size="20"></p>
			
            <p><input type="submit" value="Расчет"></p>
         </form>
	    	<?php 			  
				
			$v = [300, 450];  //Скорость резания по дереву [минимум, максимум], мм/мин. 
		    $fz = [0.05, 0.09, 0.12, 0.18];  //величина подачи на один зуб фрезы, диаметром [3-4, 5-6, 8-10, 12-16,], мм.
		        if (isset($_POST ['diam']) && isset($_POST['zub'])) {
			    $diam = $_POST['diam'];
			    $zub = $_POST ['zub'];				
			    echo "<p> Диматр фрезы =  $diam  мм </p>" ; 
			    echo "<p> Число зубьев = $zub </p>";}	    
							
			$fz_cnt = count($fz);
			for ($ifz = 0; $ifz < $fz_cnt; $ifz++){			    
			    $v_cnt = count($v);
			    for ($iv = 0; $iv < $v_cnt; $iv++){
				
				echo "$fz[$ifz] <br/>";
				echo "$v[$iv] <br/>";
				echo "$s <br/>";
				$s = round ($fz[0] * $zub *($v[1]*1000)/(M_PI*$diam));}
				echo "<p> Скорость подачи максимальная = $s </p>";
				echo "<p> Скорость подачи минимальная = $s </p>";
				}
			
				 
			 ?> 
               
	</body>
</html>
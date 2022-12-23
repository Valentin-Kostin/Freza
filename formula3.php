<!DOCTYPE html>
<html> 
    <head>
	     <meta charset="UTF-8">
	     <title>Расчет скорости подачи</title>
	</head>
	<body>
	    <h1>Расчет скорости подачи</h1>
		<a href=index.php>На главную</a>
        <form action="formula3.php" method="POST">
            <p>Диаметр фрезы:
            <input type="number" name="diam" size="20"></p>
			<p>Число зубьев:
			<input type="number" name="zub" size="20"></p>
			
            <p><input type="submit" value="Расчет"></p>
         </form>
	    	<?php 			  
				
			$vd = [200, 450];  //Скорость резания по дереву нужное [минимум, максимум], м/мин. 
		    $fz = [0.05, 0.09, 0.12, 0.18];  //величина подачи на один зуб фрезы, диаметром [3-4, 5-6, 8-10, 12-16,], мм.
			$n = [9000, 12000, 15000, 18000]; // частота вращения шпинделя, об/мин
		        if (isset($_POST ['diam']) && isset($_POST['zub'])) {
			    $diam = $_POST['diam'];
			    $zub = $_POST ['zub'];				
			    echo "<p> Диматр фрезы =  $diam  мм </p>" ; 
			    echo "<p> Число зубьев = $zub </p>";}	    
			switch ($diam){
				case $diam<5:
				      $i = 0;
					  break;
				case $diam>=5 && $diam<8:
				      $i = 1;
					  break;
				case $diam>=8 && $diam<=11:	
				      $i = 2;
					  break;				
				case $diam>=12:
				      $i = 3;}
			echo "$i <br>";
			echo $fz[$i];
			echo "<p> Скорость резания нужное минимум = $vd[0] м/мин </p>";
			echo "<p> Скорость резания нужное максимум = $vd[1] м/мин </p>";
			for ($j = 0; $j<count ($n); $j++)
			{				
                 $s = $fz[$i]*$n[$j]*$zub; //скорость подачи мм/мин
			     $vr = round (M_PI*$diam*$n[$j]/1000); //Скорость резания расчетное м/мин	                     
			     echo "<p> Cкорость подачи = $s мм/мин. при оборотах $n[$j] об/мин. Cкорость резания расчетное = $vr м/мин</p>";
			} 
			 ?>                
	</body>
</html>
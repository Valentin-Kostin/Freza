<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html> 
    <head>
	     <meta charset="UTF-8">
	     <title>Расчет скорости подачи</title>
	</head>
	<body>
	    <h1>Расчет скорости подачи</h1>
        <form action="formula2.php" method="POST">
            <p>Диаметр фрезы:
            <input type="number" name="diam" size="20"></p>
			<p>Число зубьев:
			<input type="number" name="zub" size="20"></p>
			
            <p><input type="submit" value="Расчет"></p>
         </form>
	    	<?php 			  
				
			$v = [200, 450];  //Скорость резания по дереву нужное [минимум, максимум], м/мин. 
		    $fz = [0.05, 0.09, 0.12, 0.18];  //величина подачи на один зуб фрезы, диаметром [3-4, 5-6, 8-10, 12-16,], мм.
			$n = [12000, 15000, 18000]; // частота вращения шпинделя, об/мин
		        if (isset($_POST ['diam']) && isset($_POST['zub'])) {
			    $diam = $_POST['diam'];
			    $zub = $_POST ['zub'];				
			    echo "<p> Диматр фрезы =  $diam  мм </p>" ; 
			    echo "<p> Число зубьев = $zub </p>";}	    
			function f_for ($v, $fz, $diam, $zub){
			   $s = round ($fz * $zub *($v*1000)/(M_PI*$diam));
			return $s;
			}
			switch ($diam){
				case $diam<5:
				      $i = 0;
					  break;
				case 5:
				      $i = 1;
					  break;
				case 6:
				      $i = 1;
					  break;
				case 7:
				      $i = 1;
					  break;
				case 8:
				      $i = 2;
					  break;
				case 9:
				      $i = 2;
					  break;
				case 10:
				      $i = 2;
					  break;
					  
				case $diam>11:
				      $i = 3;}
				
		 
			echo "$i <br>";
			echo $fz[$i];
            $s_min1 = $fz[$i]*$n[0]*$zub; //Минимальная скорость подачи мм/мин при оборотах 15000
			$s_max1 = $fz[$i]*$n[2]*$zub; //Максимальная скорость подачи мм/мин при оборотах 18000
            $vr_mim = round (M_PI*$diam*$n[0]/1000); //Скорость резания расчетное минимум м/мин	
            $vr_max = round (M_PI*$diam*$n[2]/1000); //Скорость резания расчетное максимум м/мин      
			
			$s_min = f_for($v[0], $fz[$i], $diam, $zub); //Минимальная скорость подачи мм/мин 
			$s_max = f_for($v[1], $fz[$i], $diam, $zub); //Максимальная скорость подачи мм/мин 
			$n_min = round(($v[0]*1000)/(M_PI*$diam)); // Минимальная частота вращения об/мин
			$n_max = round(($v[1]*1000)/(M_PI*$diam)); // Максимальная частота вращения об/мин
			$v_n = round (M_PI*$diam*$n_max/1000); //Скорость резания нужное максимум м/мин
			echo "<p> Минимальная скорость подачи = $s_min мм/мин. при оборотах 12000 мм/мин =  $s_min1 </p>";
			echo "<p> Максимальная скорость подачи = $s_max мм/мин при оборотах 18000 мм/мин =  $s_max1 </p>";
			echo "<p> Минимальная частота вращения = $n_min об/мин </p>";
			echo "<p> Максимальная частота вращения = $n_max об/мин </p>";
			echo "<p> Минимальная скорость резания расчетное = $vr_mim м/мин </p>";
			echo "<p> Максимальная скорость резания расчетное = $vr_max м/мин </p>";
			echo "<p> Скорость резания нужное максимум = $v_n м/мин </p>";
			 ?> 
               
	</body>
</html>
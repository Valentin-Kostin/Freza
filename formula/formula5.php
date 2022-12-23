<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html> 
    <head>
	     <meta charset="UTF-8">
	     <title>Расчет скорости подачи</title>
	</head>
	<body>
	    <h1>Расчет скорости подачи</h1>
        <form action="formula5.php" method="POST">
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
		        if (isset($_POST ['diam']) && isset($_POST['zub'])) 
				{
			    $diam = $_POST['diam'];
			    $zub = $_POST ['zub'];				
			    echo "<p> Диматр фрезы =  $diam  мм </p>" ; 
			    echo "<p> Число зубьев = $zub </p>";
				}
			foreach ($fz as $v)
			{
				echo "текущее значение \$a: $v.\n<br/>";
			}
			
			foreach ($fz as $k =>$v)
			{
				echo "текущее значение \$a[$k] => $v.<br/>";
				
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
			echo "<p> Скорость резания нужное минимум = $vd[0] м/мин </p>";
			echo "<p> Скорость резания нужное максимум = $vd[1] м/мин </p>";
			for ($i1 = 0; $i1<count ($n); $i1++)
			{				
                 $s = $fz[$i]*$n[$i1]*$zub; //скорость подачи мм/мин
			     $vr = round (M_PI*$diam*$n[$i1]/1000); //Скорость резания расчетное м/мин	                     
			     echo "<p> Cкорость подачи = $s мм/мин. при оборотах $n[$i1] об/мин. Cкорость резания расчетное = $vr м/мин</p>";
			} 
			 ?> 
               
	</body>
</html>
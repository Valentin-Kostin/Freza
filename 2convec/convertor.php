<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Конвертор</title>
    </head>
    <body>
        <a href="../index.php">На главную</a>
        <h1>Преобразование из дюймов в миллиметры</h1>
		<?php 
            $ins = 1/8;
			$cents = $ins * 25.4;
            $ins2 = 27;
			$cents2 = $ins2 * 25.4  			
			?>
        <p><?php echo $ins ?> дюймов = <?php echo $cents ?> мм.</p>
		<p><?php echo $ins2 ?> дюймов = <?php echo $cents2 ?> мм.</p>
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
    <h1>Преобразование из дюймов в сантиметры</h1>
        <form action="convertor.php" method="post">
            <p>Величина в дюймах:
            <input type="text" name="inches" size="10"></p>
            <p><input type="submit" value="Преобразовать"></p>
        </form>
        <?php
            if (isset($_POST['inches'])) {
                $ins = (double)$_POST['inches'];
                if ($ins > 0) {
                    $cents = round($ins * 2.54);
                    $is = (string)$ins;
                    if (strpos($is, '.') !== FALSE || (strlen($is) > 1 && $is[-2] == '1'))
                        $ins_ending = 'ов';
                    else {
                        $is = $is[-1];
                        if ($is == 1)
                            $ins_ending = '';
                        else if ($is >= 2 && $is <= 4)
                            $ins_ending = 'а';
                        else
                            $ins_ending = 'ов';
                    }
                    $cs = (string)$cents;
                    if (strlen($cs) > 1 && $cs[-2] == '1')
                        $cents_ending = 'ов';
                    else {
                        $cs = $cs[-1];
                        if ($cs == 1)
                            $cents_ending = '';
                        else if ($cs >= 2 && $cs <= 4)
                            $cents_ending = 'а';
                        else
                            $cents_ending = 'ов';
                    }
                    echo "<p>{$ins} дюйм{$ins_ending} = {$cents} сантиметр{$cents_ending}.</p>";
                } else
                    echo '<p>Величина в дюймах должна быть больше нуля.</p>';
            }
        ?>
        <h1>Преобразование из дюймов в миллиметры</h1>
        <form action="convertor.php" method="post">
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
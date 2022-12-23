<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="/gal/styles.css" rel="stylesheet" type="text/css">
        <title>Фотогалерея</title>
    </head>
    <body>
         <h1>Фотогалерея</h1>
         <section id="gallery">
		 <?php 
		     require_once 'modules/data.php';
			 $cnt = count($arr_images);
			 for ($i=0; $i<$cnt; $i++){
				 ?>
				 <img src="/gal/images/<?php echo $arr_images[$i] ?>">
			 <?php } ?>
         </section>
    </body>
</html>
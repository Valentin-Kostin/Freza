<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="/5/styles.css" rel="stylesheet" type="text/css">
        <title>Фотогалерея</title>
    </head>
    <body>
        <h1>Фотогалерея</h1>
        <section id="gallery">
		<?php 
		    $cnt = count($arr_images);
			for ($i = 0; $i<$cnt; $i++)
			{?>
				<a href="/5/<?php echo $i ?>/">
				    <img src = "/5/images/<?php echo $arr_images[$i]['src'];?>"
				    title="<?php echo $arr_images[$i]['desc']?>">
				</a>
			<?php }
			?>
        </section>
    </body>
</html>
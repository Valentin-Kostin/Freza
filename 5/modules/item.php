<?php
    $item = $arr_images[$index];
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="/styles.css" rel="stylesheet" type="text/css">
        <title><?php echo $item['desc']?>: Фотогалерея</title>
    </head>
    <body>
        <h1>Фотогалерея</h1>
		<h2><?php echo $item['desc']?></h2>
        <p><a href="/5/index.php">На главную</a></p>
        <section id="gallery-item">
		    <img src="/5/images/<?php echo $item['src']?>">
        </section>
        <p><a href="/5/index.php">На главную</a></p>
    </body>
</html>

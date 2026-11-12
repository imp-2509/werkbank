<?php

include 'app/core/trigger.php';

?>

<html>
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<link href="css/nav.css" rel="stylesheet" type="text/css" />

<body>
    <h1>Hoi</h1>
    <nav>
        <a href="?controller=home">Home</a> |
        <a href="?controller=page1">Page 1</a> |
        <a href="?controller=gallery">Gallery</a> |
    </nav>
    <hr>
    <article class="output">
        <?php triggerController(); ?>
    </article>
</body>

</html>
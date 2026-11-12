<?php

include 'app/core/trigger.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruitsite</title>
</head>
<body>
    <h1>Fruitsite</h1>
    <nav>
        <a href="?controller=home">Home</a> |
        <a href="?controller=page1">Page 1</a> |
        <a href="?controller=page2&id=99">Page 2</a> |
    </nav>
    <hr>
    <article class="output">
        <?php echo triggerController(); ?>
    </article>
    <hr>
    <footer>
        2026 &copy; by Iraj
    </footer>
</body>
</html>

<?php

include 'app/core/db_connect.php';
include 'app/core/db_query.php';
include 'app/core/trigger.php';

$conn = db_connect();

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
        <a href="?controller=fruit">Fruit</a> |
    </nav>
    <hr>
    <article class="output">
        <?php echo triggerController($conn); ?>
    </article>
    <hr>
    <footer>
        2026 &copy; by Iraj
    </footer>
</body>
</html>

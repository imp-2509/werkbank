<?php
$programmeertalen = ["PHP", "C#", "HTML", "JavaScript", "Java", "C++", "C"];

$programmeertalen[] = "Python";
$programmeertalen[] = "Swift";

sort($programmeertalen);

$render = "";
foreach ($programmeertalen as $taal) {
    $render .= $taal . "<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programmeertalen</title>
</head>
<body>
    <h2>Programmeertalen</h2>
    <p><?php echo $render; ?></p>
    <p>Aantal talen: <?php echo count($programmeertalen); ?></p>
</body>
</html>

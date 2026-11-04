<?php
$a = "Ik heb niet gefaald";
$b = "die niet werken";
$c = 10000;

$citaat1 = $a . ". Ik heb alleen " . $c . " manieren gevonden " . $b . ".";

$a = "die geen fout";
$b = "en";
$c = "niet.";

$citaat2 = "Mensen " . $a . $b . " maken, werk" . $b . " " . $c;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citaten</title>
</head>
<body>
    <h1>Citaten</h1>

    <p><?php echo $citaat1; ?></p>
    <p>- Thomas Edison</p>

    <p><?php echo $citaat2; ?></p>
    <p>- Albert Plesman (KLM)</p>
</body>
</html>

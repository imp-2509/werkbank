<?php
$diameter = 2;
$bewerking = "omtrek"; // omtrek of oppervlakte

$straal = $diameter / 2;

if ($bewerking == "omtrek") {
    $uitkomst = pi() * $diameter;
    $eenheid = "cm";
} else {
    $uitkomst = pi() * $straal * $straal;
    $eenheid = "cm²";
}

$render = "De " . $bewerking . " van een cirkel met diameter " . $diameter . " cm is " . round($uitkomst, 4) . " " . $eenheid;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cirkel</title>
</head>
<body>
    <h1>Cirkel</h1>
    <hr>
    <p><?php echo $render; ?></p>
</body>
</html>

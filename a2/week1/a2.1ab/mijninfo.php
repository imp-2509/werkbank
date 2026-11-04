<?php
// mijn gegevens
$voornaam = "Iraj";
$achternaam = "Parki";

// als tekst, hier reken ik niet mee
$studentnummer = "97074837";

$klas = "SD1B";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mijn info</title>
</head>
<body>
    <h1>Mijn info</h1>
    <p>
        <?php echo $voornaam . " " . $achternaam; ?><br>
        <?php echo $studentnummer; ?><br>
        <?php echo $klas; ?>
    </p>
</body>
</html>

<?php
$geboortejaar = 2002;
$schatting = date("Y") - $geboortejaar;

$render = "";

if (!empty($_POST['geboortedatum'])) {
    $geboortedatum = date_create($_POST['geboortedatum']);
    $vandaag = date_create(date("Y-m-d"));

    if (!$geboortedatum) {
        $render = "Dit is geen geldige datum!";
    } elseif ($geboortedatum > $vandaag) {
        $render = "Je geboortedatum kan niet in de toekomst liggen!";
    } else {
        $verschil = date_diff($geboortedatum, $vandaag);
        $render = "Je bent " . $verschil->y . " jaar oud";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leeftijd</title>
</head>
<body>
    <h2>Leeftijd berekenen</h2>
    <p>Geboren in <?php echo $geboortejaar; ?>, dan ben je ongeveer <?php echo $schatting; ?> jaar.</p>

    <form method="post" action="">
        <label>Geboortedatum</label>
        <input type="date" name="geboortedatum" required>
        <input type="submit" value="Bereken">
    </form>
    <p><?php echo $render; ?></p>
</body>
</html>

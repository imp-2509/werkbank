<?php
$render = "";

if (!empty($_GET)) {
    $tafel = $_GET['tafel'];
    $begin = $_GET['begin'];
    $eind = $_GET['eind'];

    if (!is_numeric($tafel) || !is_numeric($begin) || !is_numeric($eind)) {
        $render = "Vul overal een getal in!";
    } elseif ($begin > $eind) {
        $render = "Begin mag niet groter zijn dan eind!";
    } else {
        for ($i = $begin; $i <= $eind; $i++) {
            $render .= $i . " x " . $tafel . " = " . $i * $tafel . "<br>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tafels</title>
</head>
<body>
    <h2>Tafel maken</h2>
    <form method="get" action="">
        <label>Tafel van</label>
        <input type="number" name="tafel" required>
        <label>Begin</label>
        <input type="number" name="begin" required>
        <label>Eind</label>
        <input type="number" name="eind" required>
        <input type="submit" value="Toon">
    </form>
    <p><?php echo $render; ?></p>
</body>
</html>

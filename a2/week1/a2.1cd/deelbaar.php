<?php
$render = "";

if (isset($_GET['deeltal']) && isset($_GET['deler'])) {
    $deeltal = $_GET['deeltal'];
    $deler = $_GET['deler'];

    if (!is_numeric($deeltal) || !is_numeric($deler)) {
        $render = "Vul twee getallen in!";
    } elseif ($deler == 0) {
        $render = "De deler mag niet 0 zijn!";
    } else {
        $breuk = $deeltal / $deler;

        if (is_integer($breuk)) {
            $render = $deeltal . " is wel deelbaar door " . $deler;
        } else {
            $render = $deeltal . " is niet deelbaar door " . $deler;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deelbaar</title>
</head>
<body>
    <h2>Is het deelbaar?</h2>
    <form method="get" action="">
        <label>Deeltal</label>
        <input type="number" name="deeltal" required>
        <label>Deler</label>
        <input type="number" name="deler" required>
        <input type="submit" value="Controleer">
    </form>
    <p><?php echo $render; ?></p>
</body>
</html>

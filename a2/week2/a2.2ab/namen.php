<?php
$render = "";

if (!empty($_GET['namen'])) {
    $namen = explode(" ", $_GET['namen']);

    foreach ($namen as $naam) {
        if ($naam != "") {
            $render .= htmlspecialchars($naam) . "<br>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namen</title>
</head>
<body>
    <h2>Namen</h2>
    <form method="get" action="">
        <label>Namen (met een spatie ertussen)</label>
        <input type="text" name="namen">
        <input type="submit" value="Toon">
    </form>
    <p><?php echo $render; ?></p>
</body>
</html>

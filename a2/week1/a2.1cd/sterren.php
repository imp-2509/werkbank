<?php
$render = "";

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        $render .= "*";
    }
    $render .= "<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sterren</title>
</head>
<body>
    <h2>Sterren</h2>
    <p><?php echo $render; ?></p>
</body>
</html>

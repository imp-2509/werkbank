<?php
$render = "";

for ($i = 0; $i <= 90; $i += 10) {
    $render .= $i;

    if ($i < 90) {
        $render .= ", ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getallen</title>
</head>
<body>
    <h2>0 t/m 90</h2>
    <p><?php echo $render; ?></p>
</body>
</html>

<?php
include("lib/checklogin.php");

$render = "";

if (!empty($_POST)) {
    if (checklogin($_POST['email'], $_POST['wachtwoord'])) {
        $render = "Je bent ingelogd!";
    } else {
        $render = "Email of wachtwoord klopt niet.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen</title>
</head>
<body>
    <h2>Inloggen</h2>
    <form method="post" action="">
        <label>Email</label><br>
        <input type="email" name="email" required><br><br>

        <label>Wachtwoord</label><br>
        <input type="password" name="wachtwoord" required><br><br>

        <input type="submit" value="Inloggen">
    </form>
    <p><?php echo $render; ?></p>
</body>
</html>

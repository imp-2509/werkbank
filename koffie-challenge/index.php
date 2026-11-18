<?php

$conn = mysqli_connect('localhost', 'root', '', 'koffie');

if (!empty($_GET['verstuur'])) {
    $naam = $_GET['naam'];
    $kopjes = $_GET['kopjes'];

    if ($kopjes == 0) {
        $uitslag = 'Geen koffie? Leef je nog bro?';
    } elseif ($kopjes <= 2) {
        $uitslag = 'Valt mee, nog geen koffie junkie.';
    } elseif ($kopjes <= 5) {
        $uitslag = 'Begint al een beetje koffie junkie te worden...';
    } elseif ($kopjes <= 10) {
        $uitslag = 'Je handen beginnen te trillen als een junkie.';
    } else {
        $uitslag = 'Je bent officieel een koffie junkie.';
    }

    $stmt = mysqli_prepare($conn, 'INSERT INTO resultaten (naam, kopjes) VALUES (?, ?)');
    mysqli_stmt_bind_param($stmt, 'si', $naam, $kopjes);
    mysqli_stmt_execute($stmt);
}

$resultaten = mysqli_query($conn, 'SELECT * FROM resultaten ORDER BY id DESC LIMIT 5');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koffie opdracht</title>
</head>
<body>
    <h1>Koffie opdracht</h1>

    <form method="get">
        Naam:<br>
        <input type="text" name="naam"><br>
        Hoeveel kopjes koffie heb je vandaag gehad?<br>
        <input type="number" name="kopjes" min="0"><br><br>
        <input type="submit" name="verstuur" value="Verstuurd">
    </form>

    <?php if (isset($uitslag)) { ?>
        <p>Hoi <?php echo htmlspecialchars($naam); ?>, je hebt <?php echo $kopjes; ?> kopjes gehad.</p>
        <p><b><?php echo $uitslag; ?></b></p>
    <?php } ?>

    <h2>Laatste 5 deelnemers</h2>
    <table border="1">
        <tr><th>Naam</th><th>Kopjes</th></tr>

        <?php 

        while ($rij = mysqli_fetch_assoc($resultaten)) { ?>
            <tr>
                <td><?php echo htmlspecialchars($rij['naam']); ?></td>
                <td><?php echo $rij['kopjes']; ?></td>
            </tr>
        <?php }
        
        ?>

    </table>
</body>
</html>

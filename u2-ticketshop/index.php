<?php include "includes/header.php"; ?>

<h2>Kaartjes bestellen</h2>
<p>Een kaartje kost &euro; 85,00. Bij 4 of meer kaartjes krijg je 10% korting.</p>

<form action="bestelling.php" method="post">
    <label>Naam:</label><br>
    <input type="text" name="naam" required><br><br>

    <label>E-mailadres:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Aantal kaartjes:</label><br>
    <input type="number" name="aantal" min="1" value="1" required><br><br>

    <input type="submit" value="Bestellen">
</form>

<?php include "includes/footer.php"; ?>

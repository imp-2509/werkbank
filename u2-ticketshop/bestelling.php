<?php
include "includes/functies.php";
include "includes/header.php";

$naam = $_POST["naam"];
$email = $_POST["email"];
$aantal = $_POST["aantal"];
$prijs = 85;

$totaal = berekenTotaal($aantal, $prijs);
?>

<h2><?php echo begroeting($naam); ?></h2>

<p>Naam: <?php echo $naam; ?></p>
<p>E-mail: <?php echo $email; ?></p>
<p>Aantal kaartjes: <?php echo $aantal; ?></p>
<p>Totaalprijs: &euro; <?php echo number_format($totaal, 2, ",", "."); ?></p>

<form action="index.php">
    <input type="submit" value="Terug">
</form>

<?php include "includes/footer.php"; ?>

<?php
$prijzen = [
    "berken" => 9.50,
    "grenen" => 8.50,
    "hardhout" => 11.50
];

$render = "";

if (!empty($_POST)) {
    $houtsoort = $_POST['houtsoort'];
    $oppervlakte = 0;

    if (empty($_POST['vorm'])) {
        $render = "Kies een vorm!";
    } elseif ($_POST['vorm'] == "rechthoek") {
        if (is_numeric($_POST['breedte']) && is_numeric($_POST['lengte']) && $_POST['breedte'] > 0 && $_POST['lengte'] > 0) {
            $breedte = $_POST['breedte'] / 1000;
            $lengte = $_POST['lengte'] / 1000;
            $oppervlakte = $lengte * $breedte;
        } else {
            $render = "Vul een breedte en lengte in groter dan 0!";
        }
    } else {
        if (is_numeric($_POST['diameter']) && $_POST['diameter'] > 0) {
            $straal = $_POST['diameter'] / 1000 / 2;
            $oppervlakte = pi() * $straal * $straal;
        } else {
            $render = "Vul een diameter in groter dan 0!";
        }
    }

    if ($oppervlakte > 0) {
        $prijs = $oppervlakte * $prijzen[$houtsoort];
        $render = "Oppervlakte: " . number_format($oppervlakte, 3, ",", ".") . " m²<br>";
        $render .= "Prijs: € " . number_format($prijs, 2, ",", ".");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tafelblad</title>
</head>
<body>
    <h2>About Hout - prijs tafelblad</h2>
    <form method="post" action="">
        <label>Houtsoort</label>
        <select name="houtsoort">
            <option value="berken">Berken (€ 9,50 per m²)</option>
            <option value="grenen">Grenen (€ 8,50 per m²)</option>
            <option value="hardhout">Hardhout (€ 11,50 per m²)</option>
        </select>
        <br><br>

        <input type="radio" name="vorm" value="rechthoek"> Rechthoek
        <input type="radio" name="vorm" value="rond"> Rond
        <br><br>

        <label>Breedte (mm)</label>
        <input type="number" name="breedte">
        <label>Lengte (mm)</label>
        <input type="number" name="lengte">
        <br><br>

        <label>Diameter (mm)</label>
        <input type="number" name="diameter">
        <br><br>

        <input type="submit" value="Bereken">
    </form>
    <p><?php echo $render; ?></p>
</body>
</html>

<?php
function berekenTotaal($aantal, $prijs)
{
    $totaal = $aantal * $prijs;

    if ($aantal >= 4) {
        $totaal = $totaal * 0.9;
    }

    return $totaal;
}

function begroeting($naam)
{
    return "Bedankt voor je bestelling, " . $naam . "!";
}

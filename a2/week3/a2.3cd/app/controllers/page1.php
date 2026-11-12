<?php

function page1()
{
    $html = '<h2>Page 1</h2>';
    $html .= '<p>Vandaag is het ' . date('d-m-Y') . '</p>';

    return $html;
}

?>

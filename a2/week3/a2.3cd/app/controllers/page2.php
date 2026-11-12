<?php

function page2()
{
    $html = '<h2>Page 2</h2>';

    if (!empty($_GET['id'])) {
        $html .= '<p>Het id is: ' . htmlspecialchars($_GET['id']) . '</p>';
    } else {
        $html .= '<p>Er is geen id meegegeven.</p>';
    }

    return $html;
}

?>

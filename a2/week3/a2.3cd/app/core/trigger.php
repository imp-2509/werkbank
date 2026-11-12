<?php

function triggerController()
{
    $controllers = ['home', 'page1', 'page2'];

    if (empty($_GET['controller'])) {
        $controller = 'home';
    } else {
        $controller = $_GET['controller'];
    }

    if (!in_array($controller, $controllers)) {
        http_response_code(404);
        return '<h2>404 — Pagina niet gevonden</h2>';
    }

    // functie heeft dezelfde naam als het bestand, zo kan ik hem aanroepen met de naam uit de url
    include 'app/controllers/' . $controller . '.php';

    return $controller();
}

?>

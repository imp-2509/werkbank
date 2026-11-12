<?php

function triggerController()
{
    if (empty($_GET['controller'])) {
        $controller = 'home';
    } else {
        $controller = $_GET['controller'];
    }

    $path = 'app/controllers/' . $controller . '.php';

    if (!is_file($path)) {
        http_response_code(404);
        echo '<h2>404 — Pagina niet gevonden</h2>';
        exit;
    }

    include $path;

    return true;
}

?>
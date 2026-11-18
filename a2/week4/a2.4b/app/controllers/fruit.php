<?php

function fruit($conn)
{
    $sql = 'SELECT * FROM `fruits`';
    $data = db_query($conn, $sql);

    $html = '<h2>Fruit</h2>';

    if (empty($data)) {
        $html .= '<p>Er staat nog geen fruit in de database.</p>';
        return $html;
    }

    $html .= '<table border="1">';
    $html .= '<tr><th>id</th><th>name</th><th>color</th><th>sweetness</th></tr>';

    foreach ($data as $fruit) {
        $html .= '<tr>';
        $html .= '<td>' . $fruit['id'] . '</td>';
        $html .= '<td>' . htmlspecialchars($fruit['name']) . '</td>';
        $html .= '<td>' . htmlspecialchars($fruit['color']) . '</td>';
        $html .= '<td>' . $fruit['sweetness'] . '</td>';
        $html .= '</tr>';
    }

    $html .= '</table>';

    return $html;
}

?>

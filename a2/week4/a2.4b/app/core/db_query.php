<?php

function db_query($conn, $sql)
{
    $result = mysqli_query($conn, $sql);

    if ($result === false) {
        return false;
    }
    if ($result === true) {
        return true;
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    mysqli_free_result($result);

    return $rows;
}

?>

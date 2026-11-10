<?php
function checklogin($email, $wachtwoord)
{
    if ($email == "root@sofware.top" && $wachtwoord == "passw0rd") {
        return true;
    } else {
        return false;
    }
}

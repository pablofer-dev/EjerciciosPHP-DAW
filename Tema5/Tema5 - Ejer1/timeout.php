<?php
function actividadUsuario($segundos)
{
    if (isset($_SESSION["timeout"])) {
        $sessionTTL = time() - $_SESSION["timeout"];
        if ($sessionTTL > $segundos) {
            session_destroy();
            header('Location: index.php?type=exp');
        }
    }
    $_SESSION["timeout"] = time();
}

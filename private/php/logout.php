<?php
    session_start();
    unset($_SESSION["id"], $_SESSION["nivel"], $_SESSION["nome"],$_SESSION["instrumentos"]);
    session_destroy();
    header('Location: ../../login.php');
    exit;
?>
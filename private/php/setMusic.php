<?php
    session_start();
    $_SESSION['msc'] = $_POST['msc'];
    header("Location: ../../partituras.php");
?>
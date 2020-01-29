<?php
    session_start();
    $current_page = basename($_SERVER['PHP_SELF'], '.php');

    // aqui está analisando se está logado ou não
    $deslogado = empty($_SESSION["nome"]);
    $paginaLogin = (strcmp($current_page, "login") == 0);
    
    if ($deslogado && !$paginaLogin) {
        $_SESSION['status'] = "Cliente não logado.";
        header("Location: ../login.php");
    } 
    else if (!$deslogado && $paginaLogin) { // evitando página de login ao voltar página index
        $_SESSION['status'] = "Cliente logado.";
        echo $_SESSION['status'];
        header("Location: ../index.php");
    }
?>
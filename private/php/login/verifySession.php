<?php
    session_start();

    /* será utilizado para impedir que o usuário seja redirecionado para tela de login
    ou para impedir que volte para ela sem necessidade */
    $paginaAtual = basename($_SERVER['PHP_SELF'], '.php');


    // verifica se está logado a partir da session
    $deslogado = empty($_SESSION["nome"]);

    // verifica se está na página de login
    $paginaLogin = (strcmp($paginaAtual, "login") == 0);
    

    if ($deslogado && !$paginaLogin) {
        $_SESSION['status'] = "Cliente não logado.";
        echo $_SESSION['status'];
        header("Location: login.php");
    } 
    else if (!$deslogado && $paginaLogin) { // evitando ir para o login sem necessidade
        $_SESSION['status'] = "Cliente logado.";
        echo $_SESSION['status'];
        header("Location: index.php");
    }
?>
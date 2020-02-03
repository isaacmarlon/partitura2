<?php
    // inicia nova ou resume sessao
    session_start();

    /* 
        será utilizado para impedir que o usuário seja redirecionado para tela de login
        quando não estiver logado ou para impedir que volte para ela sem necessidade 
    */
    $paginaAtual = basename($_SERVER['PHP_SELF'], '.php');


    // verifica se está logado a partir do atributo nome
    $deslogado = empty($_SESSION["nome"]);

    // verifica se está na página de login
    $paginaLogin = (strcmp($paginaAtual, "login") == 0);
    
    if ($deslogado && !$paginaLogin) {
        $_SESSION['status'] = "Cliente não logado. Redirecionado para tela de login.";
        echo $_SESSION['status']; // questões de debug
        header("Location: login.php");
    } 
    else if (!$deslogado && $paginaLogin) { // evitando ir para o login sem necessidade
        $_SESSION['status'] = "Cliente logado.";
        echo $_SESSION['status']; // questões de debug
        header("Location: index.php");
    }
?>
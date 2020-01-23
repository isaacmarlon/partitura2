<?php
    include("ath-connection.php");

    session_start();

    $logged = false;

    if ($stmt = $mysqli->prepare('SELECT nome FROM usuarios WHERE nome = ? AND senha = md5(?)')) {
        $stmt->bind_param('ss', $_POST['user'], $_POST['password']);
        $stmt->execute();
        $stmt->store_result();
        
        if ($stmt->num_rows > 0) {
            $logged = true;
            $_SESSION["nome"] = $_POST['user'];
        }

        $stmt->close();
    }
    
    if ($logged) {
        header("Location: ../musicas.php");     
    }
?>
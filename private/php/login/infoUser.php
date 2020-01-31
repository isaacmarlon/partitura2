<?php 
    include_once("conexao.php");

    session_start();

    if ($stmt = $mysqli->prepare('SELECT instrumento FROM usuarios WHERE nome = ?')) {
        $stmt->bind_param('s', $_SESSION['nome']);
        $stmt->execute();
        $stmt->store_result();
        
        if ($stmt->num_rows > 0) {
            $logged = true;
            $_SESSION["nome"] = $_POST['user'];
        }

        $stmt->close();
    }
?>
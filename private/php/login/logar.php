<?php
    session_start();

    include_once("conexao.php");

    $logou = false;

    $user = $_POST["user"];
    $password = $_POST["password"];
    
    if ($stmt = $mysqli->prepare('SELECT id, nivel, usuario, senha FROM usuarios WHERE usuario = ? LIMIT 1')) {
        $stmt->bind_param('s', $user);
        $stmt->execute();
        $stmt->store_result();
        
        if ($stmt->num_rows > 0) {

            $stmt->bind_result($id, $nivel, $nome, $senha);
            $stmt->fetch();

            if (password_verify($password, $senha)) {
                $_SESSION["id"] = $id;
                $_SESSION["nivel"] = $nivel;
                $_SESSION["nome"] = $nome;
                $logou = true;

                if ($stmt = $mysqli->prepare('CALL verInstrumentos(?)')) {
                    $stmt->bind_param('s', $id);
                    $stmt->execute();
                    $stmt->store_result();

                    $stmt->bind_result($instrumento);

                    $instrumentos = array();

                    while($stmt->fetch()) {
                        array_push($instrumentos, $instrumento);    
                    }

                    $_SESSION["instrumentos"] = $instrumentos;
                    print_r($_SESSION["instrumentos"]);
                }
            }
            
        }
        
        $stmt->close();
    }
    
    if ($logou) {
        header("Location: ../../../index.php");
        exit;  
    } else {
        header("Location: ../../../login.php?l=1"); 
        exit;
    }
?>
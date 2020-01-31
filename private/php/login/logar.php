<?php
    session_start();

    include_once("../conexao/conexao.php");

    $user = $_POST["user"];
    $password = $_POST["password"];
    $logou = false;
    
    $sql = 'SELECT id, nivel, usuario, senha FROM usuarios WHERE usuario = ? LIMIT 1';

    if ($stmt = $mysqli->prepare($sql)) {

        $stmt->bind_param('s', $user);
        $stmt->execute();
        $stmt->store_result();
        
        // achou dados
        if ($stmt->num_rows > 0) {

            // seta os resultados nessas variáveis
            $stmt->bind_result($id, $nivel, $nome, $senha);
            $stmt->fetch();

            // vai verificar se a senha encriptada bate com os dados
            if (password_verify($password, $senha)) {

                // está logado
                $logou = true;
                $_SESSION["id"] = $id;
                $_SESSION["nivel"] = $nivel;
                $_SESSION["nome"] = $nome;

                // vai buscar informações sobre o músico
                include_once("infoUser.php");
                
            }
            
        }
        
        $stmt->close();
    }
    
    if ($logou) {
        header("Location: ../../../index.php");
        exit;  
    } else {
        $_SESSION['popup'] = 1;
        header("Location: ../../../login.php?l=1"); 
        exit;
    }
?>
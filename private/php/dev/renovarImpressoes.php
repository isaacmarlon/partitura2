<?php
    /*
        ATENÇÃO: ESSE SCRIPT PHP DEVE SER RESTRITO
        
        MOTIVO: ACESSO AO SHELL DO SERVIDOR

        @isaacmsl
    */
    // resume session do client

    echo " teste ";
    session_start();

    // utilizado para acionar popups
    $_SESSION['popup'] = 1;


    // ao receber do o comando
    switch($_POST['status']) {
        case 'Limpar':
            require_once "../conexao/conexao.php";
            $sql = "CALL renovarImpressoes;";
            $stmt = $mysqli->prepare($sql);
            $stmt->execute();
            $stmt->close();
            header("Location: ../../../".$_SESSION['pagAtual'].".php?i=3");
            break;
    }
?>

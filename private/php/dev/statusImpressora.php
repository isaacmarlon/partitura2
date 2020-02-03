<?php
    /*
        ATENÇÃO: ESSE SCRIPT PHP DEVE SER RESTRITO
        
        MOTIVO: ACESSO AO SHELL DO SERVIDOR E CONSEQUENTEMENTE
        CONTROLE DA IMPRESSORA

        @isaacmsl
    */
    // resume session do client
    session_start();

    // utilizado para acionar popups
    $_SESSION['popup'] = 1;
    
    // ao receber do o comando
    switch($_POST['status']) {
        case 'Ativar':
            $output = shell_exec('cupsaccept Deskjet-F4100-series 2>&1');
            echo "<pre>$output</pre>";
            header("Location: ../../../".$_SESSION['pagAtual'].".php?i=1");
            break;
        case 'Desativar':
            $output = shell_exec('cupsreject Deskjet-F4100-series 2>&1');
            header("Location: ../../../".$_SESSION['pagAtual'].".php?i=2");
            break;
    }
?>
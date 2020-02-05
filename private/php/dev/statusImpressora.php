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

    require_once "../includes/Cups.php";
    
    $printer = new Cups\Printer;

    // ao receber do o comando
    switch($_POST['status']) {
        case 'Ativar':
            $output = $printer->cupsAcceptJobs("Deskjet");
            echo "<pre>$output</pre>";
            header("Location: ../../../".$_SESSION['pagAtual'].".php?i=1");
            break;
        case 'Desativar':
            $output = $printer->cupsRejectJobs("Deskjet");
	    echo "<pre>&output</pre>";
            header("Location: ../../../".$_SESSION['pagAtual'].".php?i=2");
            break;
    }
?>

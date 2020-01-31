<?php
    session_start();
    $_SESSION['popup'] = 1;
    
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
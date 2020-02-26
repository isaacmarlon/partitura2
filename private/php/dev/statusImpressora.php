<?php
    switch($_POST['status']) {
        case 'Ativar':
            echo "<pre>$output</pre>";
            header("Location: ../../../index.php?i=1");
            break;
        case 'Desativar':
	    echo "<pre>&output</pre>";
            header("Location: ../../../index.php?i=2");
            break;
    }
?>

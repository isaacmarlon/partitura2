<div id="popUps">
<?php
    session_start();

    if ($_SESSION['popup'] == 1) {

        if (($_GET["l"] == 1)) {
            echo "<div id='noService'>Serviço de impressão indisponível no momento.</div>";
        } else if (($_GET["l"] == 2)) {
            echo "<div id='impressaoOk'> Sua partitura está sendo impressa, aguarde.</div>";
        } else if (($_GET["i"] == 1)) {
            echo "<div id='impressoraOn'>Impressora ativada.</div>";
        } else if (($_GET["i"] == 2)) {
            echo "<div id='impressoraOff'>Impressora desativada.</div>";
        }
        
        $_SESSION['popup'] = 0; // evita repetir o mesmo popup ao atualizar a página
    }

?>
</div>
<div id="popUps">
<?php
    switch($_GET["l"]) {
        case 1:
            echo "<div class='status0'>Serviço de impressão indisponível no momento.</div>";
            break;
        case 2:
            echo "<div class='status1'>Pedido de impressão enviado.</div>";
            break;
        case 3:
            echo "<div class='status0'><p>Login incorreto.</p></div>";
            break;
        case 4:
            echo "<div class='status0'><p>Aconteceu algum problema, tente novamente.</p></div>";
    }
        
    switch ($_GET["i"]) {
        case 1:
            echo "<div class='status1'>Impressora ativada.</div>";
            break;
        case 2:
            echo "<div class='status0'>Impressora desativada.</div>";
            break;
        case 3:
            echo "<div class='status1'>Histórico de impressões limpo.</div>";
            break;
    }
?>
</div>

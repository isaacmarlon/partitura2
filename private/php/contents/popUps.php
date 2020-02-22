<div id="popUps">
<?php
    //REAL LOCATION: login.php

    session_start(); // resume session do client

    /*  
        esse atributo popup é utilizado para não repetir o evento sem necessidade ao atualizar
        a página 

        @isaacmsl
    */
    if ($_SESSION['popup'] == 1) {


        switch($_GET["l"]) {
            case 1:
                echo "<div class='status0'>Serviço de impressão indisponível no momento.</div>";
                break;
            case 2:
                echo "<div class='status1'> Sua partitura está sendo impressa, aguarde.</div>";
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
        
        $_SESSION['popup'] = 0;  // evita repetir o mesmo popup ao atualizar a página
    }

?>
</div>

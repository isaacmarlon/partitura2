<?php
    if(isset($_POST['msc'])) {
        // resume session do client
        session_start();
        // ajuda as outros páginas a saberem que música foi selecionada
        $_SESSION['msc'] = $_POST['msc'];
        header("Location: ../../partituras.php");
    }
    else {
        echo "<b>Erro 0:</b> POST Method was not found.";
    }
?>
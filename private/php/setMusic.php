<?php
    session_start();
    if(isset($_POST['msc'])) {
       	// ajuda as outros páginas a saberem que música foi selecionada
        $_SESSION['msc'] = $_POST['msc'];
        header("Location: ../../partituras.php");
    } else if ((isset($_SESSION['id'])) && ($_GET['e'] == 1)) {
        $_SESSION['popup'] = 1;
	header("Location: ../../index.php?l=4");
    }
?>

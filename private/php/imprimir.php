<?php
    session_start();
    include_once("conexao.php");

    $msc = $_SESSION['msc'];
    $qntImpressoes = $_POST['qnt'];
    $caminho = "/mnt/sf_Musicas/'".$_POST['partitura'] . "'";

    $output = shell_exec('lpr -P Deskjet-F4100-series '. $caminho .' 2>&1 -#' . $qntImpressoes);
    
    /*echo "<pre>Música: $msc</pre>";
    echo "<pre>Quantidade: $qntImpressoes</pre>";
    echo "<pre>Caminho: $caminho</pre>";*/
    if (!empty($output)) {
        echo "<pre>Output: $output</pre>";
        $output = shell_exec('lprm');
        $_SESSION['popup'] = 1;
        header('Location: ../../partituras.php?l=1');
    } else {
        $_SESSION['popup'] = 1;
        header('Location: ../../index.php?l=1');
    }
?>
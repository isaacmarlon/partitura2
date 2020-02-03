<?php
    /*
        ATENÇÃO: ESSE SCRIPT PHP DEVE SER RESTRITO
        
        MOTIVO: ACESSO AO SHELL DO SERVIDOR

        @isaacmsl
    */

    if (isset($_POST['partitura'])) {
    
        // resume session do client
        session_start();

        $msc = $_SESSION['msc'];
        $qntImpressoes = $_POST['qnt'];

        // mnt é da pasta compartilhada para a vm do server
        $caminho = "/mnt/sf_Musicas/'".$_POST['partitura'] . "'";


        // ATENÇÃO: ACESSO AO SHELL
        $output = shell_exec('lpr -P Deskjet-F4100-series '. $caminho .' 2>&1 -#' . $qntImpressoes);
        

        // questões de debug

        /*echo "<pre>Música: $msc</pre>";
        echo "<pre>Quantidade: $qntImpressoes</pre>";
        echo "<pre>Caminho: $caminho</pre>";*/

        if (!empty($output)) { // no caso de output retornar um erro
            echo "<pre>Output: $output</pre>";
            $output = shell_exec('lprm'); // limpa todas as impressoes 
            $_SESSION['popup'] = 1;
            header('Location: ../../partituras.php?l=1'); // avisa popup erro
        } 
        else { // tudo ok com a impressora
            $_SESSION['popup'] = 1;
            header('Location: ../../partituras.php?l=2'); // avisa popup ok
        }
    }
    else {
        echo "<b>Erro 0:</b> POST Method was not found.";
    }
        
?>
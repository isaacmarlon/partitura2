<?php
    /*
        ATENÇÃO: ESSE SCRIPT PHP DEVE SER RESTRITO
        
        MOTIVO: ACESSO AO SHELL DO SERVIDOR

        @isaacmsl
    */

    if (isset($_POST['partitura'])) {
    
        // resume session do client
        session_start();

	$id = $_SESSION['id'];
        $msc = $_SESSION['msc'];
	
		
	if (!empty($_POST['qnt'])) {
	  $qntImpressoes = $_POST['qnt'];
	} else {
	  $qntImpressoes = 1;
	}
        
        // mnt é da pasta compartilhada para a vm do server
        //$caminho = "'/mnt/sf_Musicas/".$_POST['partitura'] . "'";
	$caminho = "/mnt/sf_Musicas/'".$msc."'/'".$_POST['partitura']."'";	
	
	echo $caminho;

	require_once "includes/Cups.php";
	$printer = new Cups\Printer;

        // ATENÇÃO: ACESSO AO SHELL
	$output = $printer->submit($caminho, "L3110", $qntImpressoes); 
	
        // questões de debug

        /*echo "<pre>Música: $msc</pre>";
        echo "<pre>Quantidade: $qntImpressoes</pre>";
        echo "<pre>Caminho: $caminho</pre>";*/

        if (!empty($output)) { // no caso de output retornar um erro
            echo "<pre>Output: $output</pre>";
            $_SESSION['popup'] = 1;
            header('Location: ../../partituras.php?l=1'); // avisa popup erro
        }
        else { // tudo ok com a impressora
            echo "<pre>Output: $output</pre>";
            $_SESSION['popup'] = 1;

            require_once "conexao/conexao.php";
            
            $sql = "CALL usuarioImprimiu(?,?,?);";
            
            if ($stmt = $mysqli->prepare($sql)) {
                $stmt->bind_param("isi",$id,$msc,$qntImpressoes);
            $stmt->execute();
            $stmt->close();
            }

                header('Location: ../../index.php?l=2'); // avisa popup ok
            }
    }
    else {
        echo "<b>Erro 0:</b> POST Method was not found.";
    }
        
?>

<?php
    $caminho = "../../'Músicas'/'" . $_POST['naipe'] . "'";

    //$output = shell_exec('lpr -P Deskjet-F4100-series '. $caminho .' 2>&1');
    
    echo "<pre>$output</pre>";

    header('Location: ../../public_html/index.php?l=1');
?>
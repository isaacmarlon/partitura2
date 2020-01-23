<?php
    $caminho = $_GET['caminho'];

    echo $caminho;
    $output = shell_exec('lpr -P HP-LaserJet-P2014 '. $caminho .' 2>&1');
    // $output = exec('PRINT '. $caminho .' /D:"Deskjet-F4100-series"');
    
    echo "<pre>$output</pre>";

    // header('Location: index.php');
?>
<?php
    $caminho = $_GET['caminho'];
    $output = shell_exec('lpr -P Deskjet-F4100-series '. $caminho .' 2>&1');
    echo "<pre>$output</pre>";

    header('Location: index.php');
?>
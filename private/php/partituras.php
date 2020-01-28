<?php 
    include("php/partiturasDao.php");
    //print_r(PartiturasDao::getMusicas());
    //print_r(PartiturasDao::getNaipes("Shalow"));
    //print_r(PartiturasDao::getPartituraNaipe("Siboney - ERNESTO LECUONA -","Flute"));

    $musica = $_GET['msc'];
    $naipe = $_GET['naipe'];

    $partitura = PartiturasDao::getPartituraNaipe($musica, $naipe);
    $partitura = strval($partitura[0]);

    $caminho = getcwd() . '/"Músicas"/"' . $musica .'"/"'. $partitura . '"';
    header('Location: imprimir.php?caminho=' . $caminho);

?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Partitura</title>
        <meta name="viewport" content="width=device-width;initial-scale=1">
        <meta charset="UTF8">
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <body>
        <main>
            <?php 
                include("php/partiturasDao.php");
                /*print_r(PartiturasDao::getMusicas());
                print_r(PartiturasDao::getNaipes("Shalow"));
                print_r(PartiturasDao::getPartituraNaipe("Shalow","Flauta"));*/

                $musica = $_GET['msc'];
                $naipe = $_GET['naipe'];

                echo "<input style='display:none' id='caminho' type='text' value='". getcwd(). "/Músicas/" . $musica ."/".$naipe."'>";
                echo "<h1>Partituras</h1>";
                echo "<select id='partSelected'>";

                foreach(PartiturasDao::getPartituraNaipe($musica, $naipe) as $part) {
                    echo "<option>".$part."</option>";
                }

                echo "</select>";

            ?>

            <input type="button" value="Imprimir" onclick="goImprimir();"/>

        </main>    

        <script>
            function goImprimir() {
                caminhoInicial = document.getElementById("caminho").value;
                part = document.getElementById("partSelected").value;
                caminhoFinal = caminhoInicial + "/" + part;
                alert(caminhoFinal);
                // window.location.href='imprimir.php?caminho=' + caminhoFinal;
            }
        </script>
    </body>
</html>



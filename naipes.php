<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Partitura | Naipes</title>
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

                $msc = $_GET['msc'];

                echo "<input style='display:none' id='msc' type='text' value='".$msc."'>";
                echo "<h1>Naipes</h1>";
                echo "<select id='naipeSelected'>";
                
                foreach(PartiturasDao::getNaipes($msc) as $naipe) {
                    echo "<option>".$naipe."</option>";
                }

                echo "</select>";
            ?>

            <input type="button" value="Partituras" onclick="goPartituras();"/>
        </main>    

        <script>
            function goPartituras() {
                musica = document.getElementById("msc").value;
                naipe = document.getElementById("naipeSelected").value;
                window.location.href='partituras.php?msc=' + musica + "&naipe=" + naipe;
            }
        </script>
    </body>
</html>






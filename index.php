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
            
                echo "<h1>Músicas</h1>";
                echo "<select id='mscSelected'>";
                foreach(PartiturasDao::getMusicas() as $musica) {
                    echo "<option>".$musica."</option>";
                }
                echo "</select>";
            ?>

            <input type="button" value="Naipes" onclick="goNaipes();"/>
        </main>    

        <script>
            function goNaipes() {
                musica = document.getElementById("mscSelected").value;
                window.location.href='naipes.php?msc=' + musica;
            }
        </script>
    </body>
</html>




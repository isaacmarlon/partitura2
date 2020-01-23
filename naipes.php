<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Banda | Partituras</title>
        <meta name="viewport" content="width=device-width;initial-scale=1">
        <meta charset="UTF8">
    </head>
    <body>   
        <?php include("php/header.php"); ?>
        <main>
            <h1>Naipes</h1>
            <form id="naipesForm" action="imprimir.php" method="POST">
                <select name="naipe">
                    <?php 
                        include("php/musicasIO.php");

                        $msc = $_POST['msc'];
                        
                        foreach(MusicasIO::getNaipes($msc) as $naipe) {
                            echo "<option>".$naipe."</option>";
                        }

                    ?>
                </select>
                <input type="button" value="Imprimir" onclick="goImprimir();">
            </form>
        </main>    
        <script>
            function goImprimir() {
                document.getElementById("naipesForm").submit();
            }
        </script>
    </body>
</html>






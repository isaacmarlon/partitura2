<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Banda | Músicas</title>
        <meta charset="UTF8">
        <meta name="viewport" content="width=device-width;initial-scale=1">
    </head>
    <body>
        <?php include("php/header.php"); ?>
        <main>
            <h1>Músicas</h1>
            <form id="mscForm" action="naipes.php" method="POST">
                <select name="msc">
                    <?php 
                        include("php/musicasIO.php");

                        foreach(MusicasIO::getMusicas() as $musica) {
                            echo "<option>".$musica."</option>";
                        }
                    ?>
                </select>
                <input type="button" value="Naipes" onclick="goNaipes();"/>
            </form>
        </main>    
        <script>
            function goNaipes() {
                document.getElementById("mscForm").submit();
            }
        </script>
    </body>
</html>




<?php include("verifySession.php");?>
<?php include("includes/head.php")?>
<?php include("includes/header.php")?>
        <main>
            <h1>Naipes</h1>
            <form id="naipesForm" action="imprimir.php" method="POST">
                    <?php 

                        include("musicasIO.php");
                        $msc = $_POST['msc'];

                        $usuarioInstrumentos = $_SESSION['instrumentos'];

                        $naipesResult = MusicasIO::getNaipes("../../Músicas", $msc);

                        echo "<select name='naipe'>";
                        foreach($naipesResult as $naipe) {
                            foreach($usuarioInstrumentos as $instrumento) {
                                if ((strpos($naipe[1], $instrumento) == 1) && (strcmp($instrumento, "Todos") == -1)) {
                                    echo "<option value='".$msc."/".$naipe[0]."'>".$naipe[1]."</option>";
                                } 
                                else if (strcmp($instrumento, "Todos") == 0) {
                                    echo "<option value='".$msc."/".$naipe[0]."'>".$naipe[1]."</option>";
                                } 
                            }
                        }
                        echo "</select>";
                    ?>
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






<main>
    <form id="partForm" action="private/php/imprimir.php" method="POST">
        <div>
            <?php 
                session_start();
                echo "<p><i>".$_SESSION['msc']."</i></p>";
            ?>
        </div>
        <div>
            <h1>Partituras</h1>
        </div>
        <?php 
            session_start();
            include("private/php/includes/musicasIO.php");

            $msc = $_SESSION['msc'];

            $usuarioInstrumentos = $_SESSION['instrumentos'];

            $naipesResult = MusicasIO::getNaipes($msc);

            echo "<div>";
                echo "<select name='partitura'>";
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
            echo "</div>";
        
            echo "<div>";
            switch($_SESSION["nivel"]) {
                case -1:
                case 1:
                    echo "<h1 id='qntInfo' title='Você pode imprimir até 6 partituras por vez'>Quantidade</h1>";
                    echo "</div>";
                    echo "<div>";
                    echo "<select name='qnt'>";
                    for ($i=1; $i<=6; $i++) {
                        echo "<option>$i</option>";
                    }
                    echo "</select>";
                    echo "</div>";
                    break;      
                case 0:
                    echo "<p><i>Você está limitado à uma impressão por música</i></p>";
                    break;
            }
            echo "</div>"
        ?>
        <div>
            <input type="button" value="Imprimir" onclick="goImprimir();">
        </div>
        <div>
            <input id="btnVoltar" type="button" value="Voltar" onclick="voltar();">
        </div>
    </form>
</main>    
<script>
    function goImprimir() {
        document.getElementById("partForm").submit();
    }
    function voltar() {
        window.location.href = "index.php";
    }
</script>
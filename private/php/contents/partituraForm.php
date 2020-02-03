<section>
    <form id="partForm" action="private/php/imprimir.php" method="POST">
        <div>
            <?php 
                // resume session do client
                session_start();
                echo "<p><i>".$_SESSION['msc']."</i></p>";
            ?>
        </div>
        <div>
            <h1>Partituras</h1>
        </div>
        <?php
            define("URL_ARQUIVOS","private/php");
            require_once URL_ARQUIVOS. "/includes/musicasIO.php";

            // utilizado para imprimir.php
            $msc = $_SESSION['msc'];

            $usuarioInstrumentos = $_SESSION['instrumentos'];

            // pega todos os naipes disponíveis para a msc
            $naipesResult = MusicasIO::getNaipes($msc);
        ?>
        <div>
            <select name="partitura">
            <?php
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
            ?>
            </select>
        </div>
        <div>
        <?php
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
</section>    
<script>
    function goImprimir() {
        document.getElementById("partForm").submit();
    }
    function voltar() {
        window.location.href = "index.php";
    }
</script>
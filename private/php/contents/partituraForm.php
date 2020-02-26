<section>
    <form id="partForm" action="private/php/imprimir.php" method="POST">
        <div>
            <?php 
                // resume session do client
                session_start();
                echo "<p><i>".$_POST['msc']."</i></p>";
            ?>
        </div>
        <div>
            <h1>Partituras</h1>
        </div>
        <?php
            $usuarioInstrumentos = array("Sax", "Saxofone");

            // pega todos os naipes disponíveis para a msc
            $naipesResult = array(" Sax", " Saxofone", " Flauta", " Trombone");
        ?>
        <div>
            <select name="partitura">
            <?php
                foreach($naipesResult as $naipe) {
                    foreach($usuarioInstrumentos as $instrumento) {
                        if ((strpos($naipe, $instrumento) == 1)) {
                            echo "<option>".$naipe."</option>";
                            break; // evita duplicações
                        }
                    }
                }
            ?>
            </select>
        </div>
        <div>
            <h1 id='qntInfo' title='Você pode imprimir até 6 partituras por vez'>Quantidade</h1>
        </div>
        <?php
            echo "<div>";
                echo "<select name='qnt'>";
                for ($i=1; $i<=6; $i++) {
                    echo "<option>$i</option>";
                }
                echo "</select>";
            echo "</div>";
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

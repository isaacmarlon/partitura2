<header>
    <div id="userInfo">
        <?php
            session_start();
            $nome = $_SESSION["nome"];
            $nivel = $_SESSION["nivel"];

            echo "<h2>".$nome."</h2>";
            
            echo "<div id='userDetails'>";

                if ($nivel != 0) {

                    switch($nivel) {
                        case -1:
                            echo "<div class='devTag'>";
                            echo "<p><i>dev</i></p>";
                            break;
                        case 1:
                            echo "<div class='adminTag'>";
                            echo "<p><i>admin</i></p>";
                            break;
                    }

                    echo "</div>";
                }

                $intrumento = $_SESSION["instrumentos"][0];
                echo "<div id='userInst'>";
                echo     "<p>".$intrumento."</p>";
                echo "</div>";

            echo "</div>";
        ?>
    </div>
    <div id="userOpcoes">
        <div>
            <?php
                if ($nivel != 0) {
                    echo "<a id='btnOpcoes' style='opacity:.5' href='javascript:displayOpcoes()'>Opções</a>";
                }
            ?>
        </div>
        <div>   
            <a href="links/logout.php">Sair</a>
        </div>
    </div>
    <?php
        if ($nivel != 0) {

            echo "
                <form id='impressoraForm' class='impressoraForm0' action='links/statusImpressora.php'method='POST'>
                    <div>
                        <h2>Impressora</h2>
                    </div>
                    <div>
                        <input name='status' type='submit' value='Ativar'>
                    </div>
                    <div>
                        <input name='status' type='submit' value='Desativar'>
                    </div>
                </form>
            ";
        }
    ?>
</header>
<script>
    function displayOpcoes() {
        var btnOpcoes = document.getElementById("btnOpcoes");

        var formImpress = document.getElementById("impressoraForm");
        var classformImpress = formImpress.className;

        if (classformImpress === "impressoraForm1") {
            btnOpcoes.style.opacity = .5;
            formImpress.className = "impressoraForm0";
        } else {
            formImpress.className = "impressoraForm1";
            btnOpcoes.style.opacity = 1;
        }
    }
</script>
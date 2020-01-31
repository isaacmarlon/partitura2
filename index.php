<?php include("links/verifySession.php");?>
<?php include("links/head.php")?>
<?php include("links/header.php")?>
        <main>
            <form id="mscForm" action="links/setMusic.php" method="POST">
                <div>
                    <h1>Músicas</h1>
                </div>
                <div>
                    <?php 
                        include("links/musicasIO.php");

                        echo "<select name='msc'>";

                        foreach(MusicasIO::getMusicas() as $musica) {
                            echo "<option>".$musica."</option>";
                        }

                        echo "</select>";
                    ?>
                </div>
                <div>
                    <input type="button" value="Naipes" onclick="goPartituras();"/>
                </div>
            </form>
            <?php
                session_start();

                if ($_SESSION['popup'] == 1) {

                    if (($_GET["l"] == 1)) {
                        echo "<div id='impressaoOk'> Sua partitura está sendo impressa, aguarde.</div>";
                    }

                    if (($_GET["i"] == 1)) {
                        echo "<div id='impressoraOn'>Impressora ativada.</div>";
                    } else if (($_GET["i"] == 2)) {
                        echo "<div id='impressoraOff'>Impressora desativada.</div>";
                    }
                    $_SESSION['popup'] = 0; // evita repetir o mesmo popup ao atualizar a página
                }

            ?>
        </main>    
        <script>
            function goPartituras() {
                document.getElementById("mscForm").submit();
            }
        </script>
    </body>
</html>




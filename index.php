<?php include("private/php/verifySession.php");?>
<?php include("private/php/includes/head.php")?>
<?php include("private/php/includes/header.php")?>
        <main>
            <h1>Músicas</h1>
            <form id="mscForm" action="private/php/naipes.php" method="POST">
                
                    <?php 
                        include("private/php/musicasIO.php");

                        echo "<select name='msc'>";

                        foreach(MusicasIO::getMusicas() as $musica) {
                            echo "<option>".$musica."</option>";
                        }

                        echo "</select>";
                    ?>
                <input type="button" value="Naipes" onclick="goNaipes();"/>
            </form>
            <a href="private/php/logout.php">Sair</a>
            <?php
                if (($_GET["l"] == 1)) {
                    echo "<br/> Sua partitura está sendo impressa, aguarde.";
                }
            ?>
        </main>    
        <script>
            function goNaipes() {
                document.getElementById("mscForm").submit();
            }
        </script>
    </body>
</html>




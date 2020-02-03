<section>
    <form id="mscForm" action="private/php/setMusic.php" method="POST">
        <div>
            <h1>Músicas</h1>
        </div>
        <div>
            <?php 
                // REAL LOCATION: index.php
                define("URL_ARQUIVOS","private/php");
                require_once URL_ARQUIVOS. "/includes/musicasIO.php";
            ?>
            <select name='msc'>
                <?php
                    foreach(MusicasIO::getMusicas() as $musica) {
                        echo "<option>".$musica."</option>";
                    }
                ?>
            </select>
        </div>
        <div>
            <input type="button" value="Naipes" onclick="goPartituras();"/>
        </div>
    </form>
</section>
<script>
    function goPartituras() {
        document.getElementById("mscForm").submit();
    }
</script>
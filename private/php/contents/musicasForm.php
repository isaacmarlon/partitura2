<main>
    <form id="mscForm" action="private/php/setMusic.php" method="POST">
        <div>
            <h1>Músicas</h1>
        </div>
        <div>
            <?php 
                /* REAL LOCATION: index.php */
                
                include_once("private/php/includes/musicasIO.php");

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
</main>
<script>
    function goPartituras() {
        document.getElementById("mscForm").submit();
    }
</script>
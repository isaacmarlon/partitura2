<section>
    <form id="mscForm" action="partituras.php" method="POST">
        <div>
            <h1>Músicas</h1>
        </div>
        <div>
            <select id='selectMusic' name='msc'>
                <?php
                    $musicas = array("A Conquista do Paraíso", "O Colecionador");
		            foreach($musicas as $musica) {
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

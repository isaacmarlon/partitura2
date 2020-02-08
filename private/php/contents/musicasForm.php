<section>
    <form id="mscForm" action="private/php/setMusic.php" method="POST">
        <div>
            <h1>Músicas</h1>
        </div>
        <div>
            <?php
		session_start(); 
                // REAL LOCATION: index.php
                define("URL_ARQUIVOS","private/php");
                require_once URL_ARQUIVOS. "/includes/musicasIO.php";
            	require_once URL_ARQUIVOS. "/includes/Impressoes.php";
		
		$jaImprimiu = Impressoes::getImpressoes($_SESSION["id"]);
	
	    ?>
            <select id='selectMusic' name='msc'>
                <?php
			
	            $usuarioNivel =  $_SESSION['nivel'];
                    foreach(MusicasIO::getMusicas() as $musica) {
                        if ((!in_array($musica, $jaImprimiu)) && ($nivel == 0)) {
			    echo "<option>".$musica."</option>";
			} else if ($nivel != 0) {
			    echo "<option>".$musica."</option>";
			}
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
	var mscSelect = document.getElementById("selectMusic").value;
	if (mscSelect) {
        	document.getElementById("mscForm").submit();
	} else {
	        window.location.href = "private/php/setMusic.php?e=1";
	}
    }
</script>

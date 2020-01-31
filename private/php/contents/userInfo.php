<div id='userInfo'>
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

        /* no momento, será mostrado somente o primeiro instrumento
        associado ao músico */
        $intrumento = $_SESSION["instrumentos"][0];

        echo "<div id='userInst'>";
        echo     "<p>".$intrumento."</p>";
        echo "</div>";

    echo "</div>";
?>
</div>
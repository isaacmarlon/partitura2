<div id='userInfo'>
<?php
    // resume session do client
    session_start();
    $nome = $_SESSION["nome"];
    $nivel = $_SESSION["nivel"];

    echo "<h2>".$nome."</h2>";
    
    echo "<div id='userDetails'>";

        if ($nivel != 0) {
            switch($nivel) {
                case -1:
                    echo "
                        <div class='devTag'>
                            <p><i>dev</i></p>
                        </div>
                    ";
                    break;
                case 1:
                    echo "
                        <div class='adminTag'>
                            <p><i>admin</i></p>
                        </div>
                    ";
                    break;
            }
        }

        /* 
            no momento, será mostrado somente o primeiro instrumento
            associado ao músico 
        
            @isaacmsl    
        */
        $intrumento = $_SESSION["instrumentos"][0];

        echo "<div id='userInst'>";
        echo     "<p>".$intrumento."</p>";
        echo "</div>";

    echo "</div>"; // fecha div#userDetails
?>
</div> <!-- fecha div#userInfo -->
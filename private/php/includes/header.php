<header>
    <?php
        session_start();
        echo "<p> Olá, " . $_SESSION["nome"] . "!</p>";

    
        switch($_SESSION["nivel"]) {
            case -1:
                echo "<p><i>Desenvolvedor</i></p>";
                break;
            case 0:
                echo "<p><i>Você está limitado à uma impressão por música.</i></p>";
                break;
            case 1:
                echo "<p><i>Administrador</i></p>";
                break;
        }

        echo "<b>Instrumentos:</b>";
        echo "<p>";
        foreach($_SESSION["instrumentos"] as $inst) {
            echo $inst . "<br>";
        }
        echo "</p>";
    ?>
</header>
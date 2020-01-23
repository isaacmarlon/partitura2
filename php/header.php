<header>
    <?php
        session_start();
        echo "<p> Olá, " . $_SESSION["nome"] . "</p>";
    ?>
</header>
<section>
    <form class="form-normal" action="private/php/login/logar.php" method="POST">
        <div>
            <input name="user" type="user" placeholder="Usuário">
        </div>
        <div>
            <input name="password" type="password" placeholder="Senha">
        </div>
        <div>
            <input type="submit" value="Entrar">
        </div>
    </form>
    <?php
        /* REAL LOCATION: login.php */
        session_start();

        if ($_SESSION['popup'] == 1) {

            if (($_GET["l"] == 1)) {
                echo "<div id='popup-nologin'>";
                echo    "<p>Login incorreto.</p>";
                echo "</div>";
            }
            $_SESSION['popup'] = 0;
        }
    ?>
</section>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Banda | Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-content, initial-scale=1.0">
        <link rel="stylesheet" href="private/css/login.css">
    </head>
    <body>
        <section>
            <form class="form-normal" action="links/logar.php" method="POST">
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
                if (($_GET["l"] == 1)) {
                    echo "<div id='popup-nologin'>";
                    echo    "<p>Login incorreto.</p>";
                    echo "</div>";
                }
            ?>
        </section>
    </body>
</html>
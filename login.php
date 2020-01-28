<?php include("private/php/verifySession.php"); ?>
<?php include("private/php/includes/head.php");?>
        <main>
            <h1>Login</h1>
            <form id="loginForm" action="private/php/login/logar.php" method="POST">
                <div>
                    <input type="text" name="user" placeholder="Usuário" required/>
                </div>
                <div>
                    <input type="password" name="password" placeholder="Senha" required/>
                </div>
                <input type="submit" value="Login">
            </form>
            <?php
                if (($_GET["l"] == 1)) {
                    echo "Usuário ou senha incorretos, tente novamente.";
                }
            ?>
        </main>
    </body>
</html>






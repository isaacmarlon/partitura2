<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Banda | Login</title>
        <meta name="viewport" content="width=device-width;initial-scale=1">
        <meta charset="UTF8">
    </head>
    <body>
        <main>
            <h1>Login</h1>
            <form id="loginForm" action="php/autenticate.php" method="POST">
                <div>
                    <input type="text" name="user" placeholder="Usuário" required/>
                </div>
                <div>
                    <input type="password" name="password" placeholder="Senha" required/>
                </div>
                <input type="submit" value="Login">
            </form>
        </main>
    </body>
</html>






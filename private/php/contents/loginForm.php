<section>
    <?php
        define("URL_ARQUIVOS","private/php");
        echo "<form action='".URL_ARQUIVOS."/login/logar.php' method='POST'>";
    ?>    
        <div>
            <h1>Login</h1>
        </div>
        <div>
            <input name="user" type="user" placeholder="Usuário" required>
        </div>
        <div>
            <input name="password" type="password" placeholder="Senha" required>
        </div>
        <div>
            <input type="submit" value="Entrar">
        </div>
    </form>
</section>
<?php
    require_once URL_ARQUIVOS. "/contents/popUps.php";
?>
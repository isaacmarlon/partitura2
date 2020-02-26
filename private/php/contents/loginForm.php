<section>
    <?php
        echo "<form action='index.php' method='POST'>";
    ?>    
        <div>
            <h1>Login</h1>
        </div>
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
</section>
<?php
    require_once URL_ARQUIVOS. "/contents/popUps.php";
?>
<div id="userOpcoes">
    <div>
        <?php
            session_start();
            $nivel = $_SESSION['nivel'];
            if ($nivel != 0) {
                echo "<a id='btnOpcoes' style='opacity:.5' href='javascript:displayOpcoes()'>Opções</a>";
            }
        ?>
    </div>
    <div>
        <a href="private/php/login/logout.php">Sair</a>
    </div>
</div>
<?php
    session_start();
    $nivel = $_SESSION['nivel'];

    if ($nivel != 0) {

        /* utilizado para que o statusImpressora volte para a página atual */
        $_SESSION['pagAtual'] = basename($_SERVER['PHP_SELF'], '.php');

        echo "
            <form id='impressoraForm' class='impressoraForm0' action='private/php/dev/statusImpressora.php'method='POST'>
                <div>
                    <h2>Impressora</h2>
                </div>
                <div>
                    <input name='status' type='submit' value='Ativar'>
                </div>
                <div>
                    <input name='status' type='submit' value='Desativar'>
                </div>
            </form>
        ";
    }
?>
<div id="userOpcoes">
    <div>
        <?php
            // resume session do client
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
<div id="divFunctions" class="functionsOff">
<?php
    
    // resume session do client
    session_start();
    $nivel = $_SESSION['nivel']; // REDUNDANTE COM O SCRIPT ACIMA!!!

    if ($nivel != 0) {

        // utilizado para que o statusImpressora volte para a página atual
        $_SESSION['pagAtual'] = basename($_SERVER['PHP_SELF'], '.php');?>

            <!-- SÓ É EXIBIDO SE A CONDIÇÃO DO IF DO SCRIPT PHP ATUAL FOR TRUE -->
            <form id='impressoraForm' action='private/php/dev/statusImpressora.php'method='POST'>
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
            <!-- SÓ É EXIBIDO SE A CONDIÇÃO DO IF DO SCRIPT PHP ATUAL FOR TRUE -->
            <form action='private/php/dev/renovarImpressoes.php' method='POST'>
                <div>
                    <h2>Impressões</h2>
                </div>
                <div>
                    <input name='status' type='submit' value='Limpar'>
                </div>
            </form>
    <?php } // FECHA IF?>
</div>
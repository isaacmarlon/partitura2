<div id="userOpcoes">
    <div>
        <?php
            echo "<a id='btnOpcoes' style='opacity:.5' href='javascript:displayOpcoes()'>Opções</a>";
        ?>
    </div>
    <div>
        <a href="login.php">Sair</a>
    </div>
</div>
<div id="divFunctions" class="functionsOff">
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
    <form action='private/php/dev/renovarImpressoes.php' method='POST'>
        <div>
            <h2>Impressões</h2>
        </div>
        <div>
            <input name='status' type='submit' value='Limpar'>
        </div>
    </form>
</div>
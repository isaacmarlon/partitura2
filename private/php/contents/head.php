<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php
            /* utilizado para diferenciar os includes nas páginas */
            $paginaAtual = basename($_SERVER['PHP_SELF'], '.php');
            
            switch($paginaAtual) {
                case "login":
                    echo "
                        <title>Banda | Login</title>
                        <link rel='stylesheet' type='text/css' href='private/css/login.css'>
                    ";
                    break;
                default:
                    echo "
                        <title>Banda | Beta</title>
                        <link rel='stylesheet' type='text/css' href='private/css/main.css'>
                    ";
                    break;
            }
        ?>
        <meta charset="UTF8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
    </head>
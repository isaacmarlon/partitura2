<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="uft-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="X-UA-Compatible" content="IE=edge">

        <!-- 
            A PARTIR DAQUI, SERÃO PROCESSADOS OS TITLES DENTRO DO SERVIDOR
            E OS STYLES DE ACORDO COM A PÁGINA

            @isaacmsl
        -->
        
        <?php 
            // caminho private definido para impedir acesso de algumas páginas do servidor
            define("URL_STYLES","private/css");

            // define todos os arquivos css que serão incluídos nas páginas
            $styles = array("main", "form", "popUps");

            foreach ($styles as $style) {
                echo "<link rel='stylesheet' type='text/css' href='".URL_STYLES."/$style.css'>";
            }
        ?>

        <?php
            // utilizado para diferenciar os includes nas páginas
            $paginaAtual = basename($_SERVER['PHP_SELF'], '.php');   

            switch($paginaAtual) {
                case "login":
                    echo "
                        <title>Banda | Login</title>
                        <link rel='stylesheet' type='text/css' href='".URL_STYLES."/login.css'>
                    ";
                    break;
                default:
                    echo "
                        <title>Banda | Beta</title>
                        <link rel='stylesheet' type='text/css' href='".URL_STYLES."/inside.css'>
                        <link rel='stylesheet' type='text/css' href='".URL_STYLES."/header.css'>
                    ";
            } 
        ?>
</head>
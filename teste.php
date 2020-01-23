<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Testes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
    </head>
    <body>
        <?php
            include("php/musicasIO.php");
            print_r(MusicasIO::getMusicas());
            print_r(MusicasIO::getNaipes("Game of Thrones (Marcial) -"));
        ?>
    </body>
</html>
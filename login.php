<?php 
    /* caminho private definido para impedir acesso de algumas páginas do servidor */
    define("URL_ARQUIVOS","private/php");
    require_once URL_ARQUIVOS. "/login/verifySession.php";
    require_once URL_ARQUIVOS. "/contents/head.php";
?>
<body>
<?php 
    require_once URL_ARQUIVOS. "/contents/loginForm.php";
    require_once URL_ARQUIVOS. "/contents/rodape.php"; 
?>
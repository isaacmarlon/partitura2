<?php
    define('HOST', '127.0.0.1');
    define('USUARIO', 'root');
    define('SENHA', 'zDt159;Li357');
    define('BD', 'banda_bd');


    $mysqli = mysqli_connect(HOST, USUARIO, SENHA, BD);
    if ( mysqli_connect_errno() ) {
	    die ('Failed to connect to MySQL: ' . mysqli_connect_error());
    }
    $mysqli->set_charset("utf8");
?>
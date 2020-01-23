<?php
    define('HOST', '127.0.0.1');
    define('USUARIO', 'root');
    define('SENHA', 'zDt159;Li357');
    define('DB', 'autenticacaoBanda');

    $mysqli = mysqli_connect(HOST, USUARIO, SENHA, DB);
    if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
    }
?>
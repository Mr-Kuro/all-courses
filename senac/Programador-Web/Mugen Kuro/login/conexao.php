<?php
    define("HOST", '127.0.0.1');
    define("USUARIO", 'root');
    define("SENHA", 'mysql');
    define('DB', 'log');
    

    $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ("Não foi possivel estabelecer a conexão xo.");
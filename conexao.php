<?php
    define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('BASE','dbcaduser');

    $conn = new MySqli(HOST,USER,PASS,BASE);

    // Verifica se ocorreu algum erro na conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }
?>
<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'php_dev');

    //connect
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // check connection
    if ($conn->connect_error) {
        die('Connection failed! ' . $conn->connect_error);
    }
?>
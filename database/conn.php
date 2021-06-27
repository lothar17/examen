<?php
    /* Connexion à une base MySQL avec l'invocation de pilote */
    $dsn = 'mysql:dbname=examen;host=127.0.0.1'; 
    $user = 'root';
    $password = '';

    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
?>
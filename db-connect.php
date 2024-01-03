<?php

try {
    $pdo = new PDO('mysql:host=localhost; dbname=php_cities', 'php_cities', 'vnW3azxJL1Go8cdZ', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
}
catch (PDOException $e){
    echo 'Probleme mit der Datenbankverbindung: <br>' . $e;
    die();
}
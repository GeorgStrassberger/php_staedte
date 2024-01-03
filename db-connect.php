<?php
require_once(__DIR__ . '/env.php');
try {
    $pdo = new PDO("mysql:host=localhost; dbname=$dbname", "$user", "$pw", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
}
catch (PDOException $e){
    echo 'Probleme mit der Datenbankverbindung: <br>' . $e;
    die();
}
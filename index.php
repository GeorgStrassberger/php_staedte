<?php
require_once(__DIR__ . '/db-connect.php');
require_once(__DIR__ . '/utils.php');

var_dump($pdo);

// Alle Einträge aus der DB laden.
$stmt = $pdo->prepare('SELECT * FROM `cities` ORDER BY `id` DESC');
$stmt->execute();

$cities = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<pre><?php var_dump($cities); ?></pre>

<?php
declare(strict_types=1);

function get_cities_starts_with(string $char): ?array {
    global $pdo;

    $alphabet = generate_alphabet();
    if(!in_array($char, $alphabet)){
        return null;
    }

    $stmt = $pdo->prepare('SELECT * FROM `cities` WHERE `title` LIKE :title ORDER BY `title` ASC, `zip` ASC');
    $stmt->bindValue(':title', "{$char}%");
    $stmt->execute();

    $cities = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $cities;
}
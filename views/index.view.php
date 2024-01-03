<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/simple.css">
    <title>Städte</title>
</head>
<body>
    <header>
        <h1>Städte-Verzeichnis</h1>
        <p>Hier finden Sie eine Übersicht über alle Städte in Deutschland.</p>
        <nav>
            <?php foreach($alphabet AS $char): ?>
                <a href="index.php?<?php echo http_build_query(['char' => $char]); ?>">
                    <?php echo $char ?>
                </a>
            <?php endforeach; ?>
        </nav>
    </header>
</body>
</html>
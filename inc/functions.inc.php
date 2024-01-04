<?php

function generate_alphabet()
{
    $chars = [];
    for ($i = ord('A'); $i <= ord('Z'); $i++) {
        $chars[] = chr($i);
    }
    return $chars;
}

function render($path, array $data = [])
{
    ob_start();
    extract($data);
    require $path;
    $content = ob_get_contents();
    ob_end_clean();

    $alphabet = generate_alphabet();

    require(__DIR__ . '/../views/layouts/main.view.php');
}

<?php

// Escape Function
function e($html)
{
    return htmlspecialchars($html, ENT_QUOTES, 'UTF-8', true);
}

function generate_alphabet() {
    $chars = [];
    for($i = ord('A'); $i <= ord('Z'); $i++){
        $chars[] = chr($i);
    }
    return $chars;
}

function render($path, array $data = []){
    $alphabet = generate_alphabet();
    extract($data);
    require $path;
}


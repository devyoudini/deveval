<?php declare(strict_types=1);

function dd(...$message) {
    var_dump(...$message);
    exit;
}

// function getEnv(string $key): string {
//     return $_ENV[$key] ?? null;
// }


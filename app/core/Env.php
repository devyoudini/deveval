<?php declare(strict_types=1);
namespace App\Core;

class Env {
    public static function get(string $key): string|null {
        return $_ENV[$key] ?? null;
    }

    public static function list(): array {
        return $_ENV;
    }
}

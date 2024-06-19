<?php declare(strict_types=1);
namespace App\Core;

use App\Error\InvalidEnvironmentKeyException;

class Env {
    public static function get(string $key): string|null {
        return $_ENV[$key] ?? null;
    }

    public static function list(): array {
        return $_ENV;
    }
}
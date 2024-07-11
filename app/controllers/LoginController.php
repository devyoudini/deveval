<?php declare(strict_types=1);
namespace App\Controllers;

use App\Core\Env;
use Http\Request;
use Http\Response;

class LoginController {
    private Request $request;
    private Response $response;
    private string $token;
    public function __construct(Request $request, Response $response) {
        $this->request = $request;
        $this->response = $response;
    }
    public function index(): void {
        echo "Login Page <br>";
        $this->initToken();
    }
    public function initToken() {
        $this->token = $this->request->getParameter("token");
    }
    public function isTokenValid(): bool {
        if ($this->isTokenNull() || $this->token === false) {
            return false;
        }
        return true;
    }
    public function isTokenNull(): bool {
        return $this->token === null || $this->token === "";
        // return empty($this->token);
    }
    public function tokenDecrypt(): string {
        $replacementStrings = ['+', '-', '='];
        $targetStrings = ['_PLUS_', '_MINUS_', '_EQUALS_'];
        $cleanString = str_replace($replacementStrings, $targetStrings, $this->token);
        [$decoded, $iv] = explode('::', base64_decode($cleanString, true), 2);
        $decryptedString = openssl_decrypt($decoded, 'AES-256-CBC', Env::get("PUBLIC_KEY"), 0, $iv);
        return $decryptedString;
    }

    private static function isBase64(string $string): bool {
        if (strlen($string) % 4 !== 0) return false;

        if (!preg_match('/^[A-Za-z0-9+\/=]*$/', $string)) return false;

        $decoded = base64_decode($string, true);
        if ($decoded === false) return false;

        if (base64_encode($decoded) !== $string) return false;

        return true;
    }
}

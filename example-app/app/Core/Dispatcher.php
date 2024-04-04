<?php

namespace App\Core;

use App\Core\RouteCollection;
use Database\Database;
use Dotenv\Dotenv;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use PDO;

class Dispatcher
{
  public function __construct(
    private RouteCollection $routes
  ) {
  }

  public function dispatch()
  {
    $method = $_SERVER['REQUEST_METHOD'];
    $url = $_SERVER['REQUEST_URI'];
    $script_name = $_SERVER['SCRIPT_NAME'];

    // Obtener la ruta sin "index.php"
    $path = str_replace($script_name, '', $url);

    $route = $this->routes->getRouteByUri($path);

    if (!$route) {
      return $this->echoResponse('Ruta no encontrada');
    }
    if ($method !== $route->getMethodHttp()) {
      return $this->echoResponse('Método HTTP no permitido');
    }

    if ($route->getAuth()) $this->getToken();

    $controllerClass = $route->getController();
    $controller = new $controllerClass();
    $controllerMethod = $route->getMethod();

    $controller->$controllerMethod();
  }

  private function echoResponse(string $message): void
  {
    header('Content-Type: text/plain');
    echo $message;
    exit();
  }

  private function getToken()
  {
    $dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
    $dotenv->load();

    $headers = apache_request_headers();

    $authorization = $headers['Authorization'] ?? die(json_encode([
      'message' => 'Unauthenticated',
      'status' => 'error'
    ]));

    $authorizationArray = explode(' ', $authorization);
    $token = $authorizationArray[1];

    try {
      $decodedToken = JWT::decode($token, new Key($_ENV['API_SECRET_KEY'], 'HS256'));
    } catch (\Throwable $th) {
      http_response_code(500);
      die(json_encode([
        'message' => $th->getMessage(),
        'status' => 'error'
      ]));
    }

    if (!$this->validateToken($decodedToken)) {
      http_response_code(403);
      die(json_encode([
        'message' => 'Unauthorized',
        'status' => 'error'
      ]));
    }
  }

  private function validateToken(object $decodedToken): bool|int
  {
    $query = "SELECT * FROM users WHERE id = :id";
    $statement = Database::getConnection()->prepare($query);
    $statement->bindParam(":id", $decodedToken->data->user_id, PDO::PARAM_INT);
    $statement->execute();

    return $statement->fetchColumn();
  }
}

(new Dispatcher(require 'routes/api.php'))->dispatch();

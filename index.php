<?php declare(strict_types=1);

error_reporting(E_ALL);

require "./bootstrap.php";

use CoffeeCode\Router\Router;

$router = new Router("http://localhost:8080");

$router->namespace("App\Http\Controllers");

$router->get("/developers", "DeveloperController:index");
$router->post("/developers", "DeveloperController:store");
$router->put("/developers/{id}", "DeveloperController:update");
$router->get("/developers/{id}", "DeveloperController:show");
$router->delete("/developers/{id}", "DeveloperController:delete");

$router->dispatch();
<?php
// Простая маршрутизация
require_once __DIR__ . '/../config/db.php';

$controller = $_GET['controller'] ?? 'item';
$action = $_GET['action'] ?? 'list';
$page = $_GET['page'] ?? null;

if ($page === 'about') {
    include __DIR__ . '/../app/views/partials/about.php';
    exit;
}
if ($page === 'contact') {
    include __DIR__ . '/../app/views/partials/contact.php';
    exit;
}

$controllerName = ucfirst($controller) . 'Controller';
$controllerFile = __DIR__ . '/../app/controllers/' . $controllerName . '.php';

if (file_exists($controllerFile)) {
    require_once $controllerFile;
    $controllerObj = new $controllerName();
    if (method_exists($controllerObj, $action)) {
        $controllerObj->$action();
    } else {
        echo 'Action not found';
    }
} else {
    echo 'Controller not found';
} 
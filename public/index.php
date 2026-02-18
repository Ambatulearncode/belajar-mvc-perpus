<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Controllers\BukuController;

$controller = new BukuController();

$action = $_GET['action'] ?? 'index';
if ($action === 'create') {
    $controller->create();
} elseif ($action === 'store') {
    $controller->store();
} elseif ($action === 'edit') {
    $id = $_GET['id'] ?? 0;
    $controller->edit($id);
} elseif ($action === 'update') {
    $id = $_GET['id'] ?? 0;
    $controller->update($id);
} elseif ($action === 'delete') {
    $id = $_GET['id'] ?? 0;
    $controller->delete($id);
} else {
    $controller->index();
}

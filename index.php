<?php
require_once 'config/database.php';
require_once 'controllers/ArbolesController.php';

$database = new Database();
$conn = $database->getConnection();

$controller = new ArbolesController($conn);
$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'edit':
        $id = $_GET['id'] ?? null;
        if ($id) {
            $controller->edit($id);
        } else {
            header("Location: index.php");
        }
        break;
    case 'delete':
        $id = $_GET['id'] ?? null;
        if ($id) {
            $controller->delete($id);
        } else {
            header("Location: index.php");
        }
        break;
    case 'index':
    default:
        $controller->index();
        break;
}
?>

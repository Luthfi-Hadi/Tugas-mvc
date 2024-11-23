<?php
require_once "controllers/MotorController.php";

$controller = new MotorController();

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    if ($action === "add") {
        $controller->add();
    } elseif ($action === "edit" && isset($_GET['id'])) {
        $controller->edit($_GET['id']);
    } elseif ($action === "delete" && isset($_GET['id'])) {
        $controller->delete($_GET['id']);
    } else {
        $controller->index();
    }
} else {
    $controller->index();
}

if (isset($_GET['action']) && $_GET['action'] === "add") {
    $controller->add();
}

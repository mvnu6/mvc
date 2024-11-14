<?php
// Inclure les contrôleurs
include_once 'Controller/AccueilController.php';
include_once 'Controller/VelosController.php';
include_once 'Controller/ContactController.php';

$page = $_GET['page'] ?? 'accueil'; // Par défaut, afficher la page d'accueil

switch ($page) {
    case 'accueil':
        $controller = new AccueilController();
        $controller->index();
        break;
    case 'velos':
        $controller = new VelosController();
        $controller->index();
        break;
    case 'contact':
        $controller = new ContactController();
        $controller->index();
        break;
    default:
        $controller = new AccueilController();
        $controller->index();
        break;
}
?>

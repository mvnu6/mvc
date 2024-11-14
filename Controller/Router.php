<?php
// Charger le contrôleur approprié basé sur le paramètre `page`
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
    case 'inscription':
        // Ajoutez ici la logique pour afficher la page d'inscription
        break;
    case 'connexion':
        // Ajoutez ici la logique pour afficher la page de connexion
        break;
    default:
        $controller = new AccueilController();
        $controller->index();
        break;
}
?>

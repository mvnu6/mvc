<?php
// Contrôleur par défaut pour la page d'accueil
$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';

if ($page === 'accueil') {
    require 'Controller/AccueilController.php';
} elseif ($page === 'velo') {
    require 'Controller/VeloController.php';
} else {
    echo "Page non trouvée.";
}
?>

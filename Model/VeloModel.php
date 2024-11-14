<?php
// Model/VeloModel.php
function getDatabaseConnection() {
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=smartbike;charset=utf8', 'root', ''); // Changez les paramètres selon votre configuration
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}


// Récupérer le dernier vélo ajouté
function getDernierVelo() {
    $pdo = getDatabaseConnection();
    $query = $pdo->query("SELECT * FROM velos ORDER BY date_ajout DESC LIMIT 1");
    return $query->fetch();
}

// Récupérer tous les vélos
function getTousLesVelos() {
    $pdo = getDatabaseConnection();
    $query = $pdo->query("SELECT * FROM velos");
    return $query->fetchAll();
}


function getVeloById($id) {
    $pdo = getDatabaseConnection();
    $query = $pdo->prepare("SELECT * FROM velos WHERE id = :id");
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch();
}
?>

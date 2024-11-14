<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smartbike - Accueil</title>
    <link rel="stylesheet" href="assets/styles.css"> <!-- Style CSS -->
</head>

<body>

<?php include 'Header.php'; ?> <!-- Inclure le header -->

<main>
    <h1>Bienvenue chez Smartbike</h1>
    <section class="featured-bike">
        <?php if ($dernierVelo): ?>
            <h2>Découvrez notre dernier modèle : <?= htmlspecialchars($dernierVelo['nom']) ?></h2>
            <div>
                <img src="<?= htmlspecialchars($dernierVelo['image']) ?>" alt="Photo du vélo <?= htmlspecialchars($dernierVelo['nom']) ?>">
                <p><?= htmlspecialchars($dernierVelo['description']) ?></p>
                <small>Date d'ajout : <b><?= htmlspecialchars($dernierVelo['date_ajout']) ?></b></small>
            </div>
        <?php else: ?>
            <p>Aucun vélo disponible pour le moment.</p>
        <?php endif; ?>
    </section>

    <section class="all-bikes">
        <h2>Tous nos vélos</h2>
        <div class="velos-list">
            <?php if ($velos): ?>
                <?php foreach ($velos as $velo): ?>
                    <div class="velo-item">
                        <h3><?= htmlspecialchars($velo['nom']) ?></h3>
                        <img src="<?= htmlspecialchars($velo['image']) ?>" alt="Image de <?= htmlspecialchars($velo['nom']) ?>" width="200">
                        <p><?= htmlspecialchars($velo['description']) ?></p>
                        <p><b>Prix : </b><?= htmlspecialchars($velo['prix']) ?>€</p>
                        <a href="index.php?page=commander&velo=<?= $velo['id'] ?>">Commander</a>
                        <a href="index.php?page=velo&id=<?= $velo['id'] ?>">Plus d'infos</a>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Aucun vélo disponible pour le moment.</p>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php include 'Footer.php'; ?> <!-- Inclure le footer -->

</body>
</html>


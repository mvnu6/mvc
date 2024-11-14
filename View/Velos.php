<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Vélo - Smartbike</title>
    <link rel="stylesheet" href="assets/styles.css"> <!-- Style CSS -->
</head>

<body>

<?php include 'Header.php'; ?> <!-- Inclure le header -->

<main>
    <h1>Détails du Vélo</h1>
    <?php if ($velo): ?>
        <section class="velo-detail">
            <h2><?= htmlspecialchars($velo['nom']) ?></h2>
            <div>
                <img src="<?= htmlspecialchars($velo['image']) ?>" alt="Photo du vélo <?= htmlspecialchars($velo['nom']) ?>" width="300">
                <p><b>Description : </b><?= htmlspecialchars($velo['description']) ?></p>
                <p><b>Prix : </b><?= htmlspecialchars($velo['prix']) ?>€</p>
                <p><b>Date d'ajout : </b><?= htmlspecialchars($velo['date_ajout']) ?></p>
            </div>
            <form action="index.php?page=commander" method="get">
                <input type="hidden" name="velo" value="<?= $velo['id'] ?>">
                <button type="submit">Commander ce vélo</button>
            </form>
        </section>
    <?php else: ?>
        <p>Ce vélo n'existe pas ou n'est plus disponible.</p>
    <?php endif; ?>
</main>

<?php include 'Footer.php'; ?> <!-- Inclure le footer -->

</body>
</html>

<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,600;0,700;1,400&display=swap" rel="stylesheet">
    <title>Header</title>
</head>

<body>
    <?php
    include 'header.php';

    ?>
    <div class="header container-fluid">


        <h1>Hebergements</h1>

        <article class="article container ">
            <h2>Venez donner votre avis !</h2>
            <p>Partagez, commentez en proposant vos idées afin d'améliorer le tourisme écologique dans le var.
            </p>
            <p><button type="button" class="partagez btn btn-warning">Partager Ici</button></p>
        </article>

    </div>



    <div class="connexion">
        <!-- Si il y a session auth active -->
        <?php if(isset($_SESSION['auth'])): ?>
           
            <a href="logout_gite.php">Se deconnecter</a>
        <?php else: ?>

        <a href="register_gite.php">S'inscrire</a>
        <?php include 'little_login_gite.php'; ?>
        <?php endif ?>
    </div>
<!-- REGARDER LA VIDEO DE GRAFIKART TIME CODE : 51.38 -->
    <?php if (isset($_SESSION['flash'])) : ?>
        <?php foreach ($_SESSION['flash'] as $type => $message) : ?>
            <div class="alert alert-<?= $type; ?>">
                <?= $message; ?>
            </div>
        <?php endforeach ?>
    <?php endif ?>
    <?php unset($_SESSION['flash']); ?>
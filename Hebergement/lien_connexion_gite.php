<div class="connexion">
        <!-- Si il y a session auth active -->
        <?php if(isset($_SESSION['auth'])): ?>
           
            <a href="logout_gite.php">Se deconnecter</a>
            <a href="account_gite.php">Mon profil</a>
        <?php else: ?>


        <div class="inscription">
        <a href="register_gite.php">S'inscrire</a>
        <a href="login_gite.php">Se connecter</a>
        </div>
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
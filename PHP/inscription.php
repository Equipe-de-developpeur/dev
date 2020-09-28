<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="entry.css">
</head>
<body>
<ul class="menu">
<li><a href="connexion.php" class="bouton">Connexion</a></li>
<li><a href="index.php" class="bouton">Retour au formulaire</a></li>
</ul>
<br>
<h1 id="titreh1">Inscription</h1>
<div class="formal">
<form action="inscription_traitement.php" method="post"class="formulaire">
    <label for="pseudo">Pseudo : </label><br>
    <input type="text" name="pseudo" class="form"><br>
    <label for="pass">Mot de passe : </label><br>
    <input type="password" name="pass" class="form"><br>
    <label for="pass">Retapez votre mot de passe : </label><br>
    <input type="password" name="pass" class="form"><br>
    <label for="email">Adresse email : </label><br>
    <input type="text" name="email" class="form"><br>
    <label for="dat_de_naissance">Date de naissance : </label><br>
    <input type="date" name="dat_de_naissance" class="form" min="1900-01-06"><br><br>
    <input type="submit" value="Envoyer" class="bouton"><br>
</div>
</form>
</body>
</html>
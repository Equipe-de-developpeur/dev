<style>
<?php 
include "entry.css"; 
?>
</style>

<?php 
include "connexion_bdd.php";

$req = $connexion->query("SELECT * FROM membre WHERE id=:id");
$donnees = $req->fetchall();
foreach ($donnees as $row) {
$id=$row['id'];
$pseudo=$row['pseudo'];
$pass=$row['pass'];
$email=$row['email'];
$date=$row['dat_de_naissance'];
}
var_dump()
?>
<h1 id="titreh1">Modifier mon profil</h1>
<div class="formal">
<form class="formulaire" name="form1" method="post" action="maj_info_traitement.php">
        <label for="id">ID : </label>
        <input type="text" name="id" class="form" value="<?php echo $pseudo; ?>"/>
        <label for="pseudo">Pseudo : </label>
        <input type="text" name="pseudo" class="form" value="<?php echo $pseudo; ?>"/>
        <label for="pass">Mot de passe : </label><br>
        <input type="password" name="pass" class="form" value="<?php echo $pass; ?>"/>    
        <label for="email">Email : </label>
        <input type="text" name="email" class="form" value="<?php echo $email; ?>"/>
        <label for="date">Date de naissance : </label><br>
        <input type="date" name="dat_de_naissance" class="form" value="<?php echo $date; ?>"/>
        <label for="envoyer"></label>
        <input type="submit" name="envoyer" class="bouton" value="Mettre à jour"/>
</div>
</form>
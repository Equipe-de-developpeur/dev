<div class="commentaire p-1">
    <div class="row">
        <!-- Affichage nom utilisateur -->
        <div class="col col-6">
            <?php echo $j['username']; ?>
        </div>
        <!-- Affichage date de publication -->
        <div class="col col-6 text-right">  
            <small><?php echo $j['temps']; ?></small>
        </div>
    </div>
    <!-- Affichage du commentaire -->
    <?php echo $j['commentaire']; ?>
</div>
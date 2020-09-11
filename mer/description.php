<?php
include "header.php";


if(isset($_SESSION['ile']) AND !empty($_SESSION['ile']))
{
	$vars[':liste_ile_nom']=$_SESSION['ile'];
	$sql_recup="SELECT liste_ile_nom, liste_ile_ville, liste_ile_data FROM WD_liste_ile WHERE liste_ile_nom=:liste_ile_nom";
	$exe_recup=query($sql_recup,$vars);
	$resultat_ile=fetch_object($exe_recup);
}


?>

<html lang="en"><head>
<meta charset="UTF-8">
<title><?php echo $resultat_ile->liste_ile_nom;?></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="ile/css/commentaire.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
.hero:before
{
	background: url("ile/img/<?php echo str_replace(' ','_',$resultat_ile->liste_ile_nom);?>.jpg");
}
</style>
</head>
<body>

<div class="ile-card row-flex">
<div class="col-sm-6" style="border-radius:5px; border:2px solid chocolate;">
<a href="#"><img src="ile/img/<?php echo str_replace(' ','_',$resultat_ile->liste_ile_nom);?>_mini.jpg" alt="cover" class="cover"></a>
<div class="hero">
<div class="details">
<div class="title1"><?php echo $resultat_ile->liste_ile_nom;?> </div>
<div class="title2"><?php echo $resultat_ile->liste_ile_ville;?></div>
</div> 
</div> 
<div class="row">
<div class="description col-sm-12">
<div class="col-sm-6" style="margin:auto; padding-left:2vw;">
<!-- Prochainement systeme de note -->
</div> 
<div class="col-sm-6 ecrit" style="text-align: justify;">
<p> <?php echo $resultat_ile->liste_ile_data;?> </p>
</div> 
</div>
</div> 
</div>
<!-- Commentaires -->
<div class="col-sm-6 commentaire">
 <br />
  <h2 align="center"><a href="#">Commentaires : <?php echo $resultat_ile->liste_ile_nom; ?></a></h2>
  <br />
  <div class=>
   <form method="POST" id="comment_form">
    <div class="form-group">
     <input type="text" name="comment_name" id="comment_name" class="form-control" disabled="disabled" <?php if(isset($_SESSION['utilisateur_id'])){echo 'placeholder="'.$_SESSION["utilisateur_pseudo"].'"';}?> />
    </div>
    <div class="form-group">
     <textarea name="comment_content" id="comment_content" class="form-control"  <?php if(!isset($_SESSION['utilisateur_id'])){echo 'disabled=disabled placeholder="Pour écrire un commentaire veuillez vous connecter"';}else{?>placeholder="Entrer un commentaire" <?php } ?> rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="comment_id" id="comment_id" value="0" />
     <?php if(!isset($_SESSION['utilisateur_id'])){}else{?><input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" /><?php }?>
    </div>
   </form>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment" style="overflow:auto; max-height:45vh;"></div>
  </div>
</div>
</div> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"ile/add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"ile/fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_content').focus();
 });
 
});
</script>

</body></html>
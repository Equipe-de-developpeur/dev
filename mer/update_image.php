<?php
  $msg = "";
  $msg_class = "";
  if (isset($_POST['save_image'])) {
    $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
    $profileImageName = time() . '-' . $_FILES["profileImage"]["name"];
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['profileImage']['size'] <= 2097152) {
		$extensionUpload = strtolower(substr(strrchr($_FILES['profileImage']['name'], '.'), 1));
      
    }
	else
	{
		$msg = "Image supérieur à 2Mo";
      $msg_class = "alert-danger";
	}
    // Upload image only if no errors
    if (empty($msg)) {
		if(in_array($extensionUpload, $extensionsValides)) {
			$target_file = "img/photo_profil/".$_SESSION['utilisateur_id'].".".$extensionUpload;
			if(!file_exists("img/photo_profil/"))
			{
				mkdir("img/photo_profil/");
			}
      if(move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
        
          $vars['utilisateur_image']=$_SESSION['utilisateur_id'].".".$extensionUpload;
		if(updatedefault($_SESSION['utilisateur_id'],'WD_utilisateur','utilisateur_id',$vars))
		{
			$msg = "Image uploaded and saved in the Database";
			$msg_class = "alert-success";
			$_SESSION['utilisateur_image']=$vars['utilisateur_image'];
		}
        
      } else {
        $msg = "Il y a une erreur d'upload de l'Image";
        $msg_class = "alert-danger";
      }
    }
	else
	{
		$msg = "Extension invalide";
      $msg_class = "alert-danger";
	}	
	}
  }
?>

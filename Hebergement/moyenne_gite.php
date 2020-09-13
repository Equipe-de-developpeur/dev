<?php 
    include 'config_bdd_gite.php'; ?>
    
<?php
    $note_feuille = $_POST['note-feuille'];
    $id= $_POST['id'];
    if(!empty($_POST['note-feuille'])){
        $req = $bdd->query("SELECT * FROM gites WHERE id = $id");
        while($donnees = $req->fetch()){
            
            $note_gite_moyenne = $donnees['note_moyenne'];
            $nombre_note = $donnees['nombre_note'];
           
                $note_moyenne = (($nombre_note * $note_gite_moyenne)+ $note_feuille)/($nombre_note + 1);
                $nombre_note ++ ;
                $req = $bdd->prepare("UPDATE gites SET note_moyenne = $note_moyenne, nombre_note = $nombre_note WHERE id = $id");
                $req->execute(array(
                    'note_moyenne' =>$note_moyenne,
                    'nombre_note' => $nombre_note));
               
            
        }
    } 
        else{
            header('Location:gite.php');
            $_SESSION['flash']['danger'] = 'Un problème est survenu';
    }
      

    
    
    
?>